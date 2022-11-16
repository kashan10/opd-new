<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:nurse-list|nurse-create|nurse-edit|nurse-delete', ['only' => ['index','show']]);
         $this->middleware('permission:nurse-create', ['only' => ['create','store']]);
         $this->middleware('permission:nurse-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:nurse-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        //page field is defined in the request
        $nurses = Nurse::latest()->paginate(5);
        return view('admin.nurses.index',compact('nurses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'speciality' => 'required',
            'department_id' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        
        Nurse::create($request->all());
    
        return redirect()->route('admin.nurses.index')
                        ->with('success','Nurse created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $nurse)
    {
        //
        return view('admin.nurses.show',compact('nurse'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nurse $nurse)
    {
        //
        return view('admin.nurses.show',compact('nurse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nurse $nurse)
    {
        //
        return view('admin.nurses.edit',compact('nurse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nurse $nurse)
    {
        //
        request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'speciality' => 'required',
            'department_id' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        $nurse->update($request->all());
    
        return redirect()->route('admin.nurses.index')
                        ->with('success','Nurse updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nurse $nurse)
    {
        //

        $nurse->delete();
    
        return redirect()->route('admin.nurses.index')
                        ->with('success','Nurse deleted successfully');
    }
}
