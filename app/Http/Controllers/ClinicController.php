<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nurse;
use App\Models\Clinic;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ClinicController extends Controller
{

    function __construct()
    {
        //  $this->middleware('permission:clinic-list|clinic-create|clinic-edit|clinic-delete', ['only' => ['index','show']]);
        //  $this->middleware('permission:clinic-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:clinic-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:clinic-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        

        $clinics = Clinic::paginate(5);

        //dd($clinics);

        return view('admin.clinic.index',compact('clinics'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $doctor = Doctor::get();
        $nurse = Nurse::get();
       
        return view('admin.clinic.create',compact('doctor','nurse'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        request()->validate([
            'name'=> 'required',
            'doctor'=> 'required',
            'nurse'=> 'required',
            
        ]);
    
        $clinic = new Clinic;
     
        
        $clinic->date = $request->date;
        $clinic->start = Carbon::createFromFormat('H:i', $request->start)->toTimeString();
        $clinic->end = Carbon::createFromFormat('H:i', $request->end)->toTimeString();
        $clinic->name = $request->name;
       

       $clinic->save();
      
       
        $clinic->doctor()->attach($request->doctor);
        $clinic->nurse()->attach($request->nurse);

        return redirect()->route('clinic.index')
                        ->with('success','clinic created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $clinic = Clinic::find($id);
        
        return view('admin.clinic.show',compact('clinic'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $clinic = Clinic::find($id);
        return view('admin.clinic.edit',compact('clinic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $clinic = Clinic::find($id);
        $clinic->doctor()->detach();
        $clinic->nurse()->detach();

        $clinic->delete();

        return redirect()->route('clinic.index')
        ->with('success','Clinic deleted successfully');
    }
}
