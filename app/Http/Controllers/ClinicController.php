<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Nurse;
use Illuminate\Http\Request;
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
        

        $clinics = Clinic::join('doctors', 'clinics.doctor_id', '=', 'doctors.id')
                    ->join('nurses', 'clinics.nurse_id', '=', 'nurses.id')
                    ->join('users as do', 'do.id', '=', 'doctors.user_id')
                    ->join('users as nu', 'nu.id', '=', 'nurses.user_id')
                    ->select( 'clinics.*','do.name as doctor','nu.name as nurse')
                    ->paginate(5);

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
        dd($request);
        request()->validate([
            'name'=> 'required',
            'doctor'=> 'required',
            'nurse'=> 'required',
            
        ]);
    
        $clinic = new Clinic;
 
        $clinic->name = $request->name;
        $clinic->email = $request->email;
        $clinic->email = $request->email;
        

        $clinic->save();
        
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
    }
}
