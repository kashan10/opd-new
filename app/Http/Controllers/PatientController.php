<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    //page field is defined in the request
    $user_patients = DB::table('users')
        ->join('patients', 'users.id', '=', 'patients.user_id')
        ->where('status', '=', 1)
        ->select('users.*', 'patients.*')
        ->paginate(5);

        
    // $nurses = Nurse::latest()->paginate(5);
    return view('admin.patients.index',compact('user_patients'))
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
        return view('admin.patients.create');
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
        request()->validate([
            'name'=> 'required',
            'age'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'password' => 'required|string|min:8|confirmed',
            'file' => 'required',
        ]);

        $user = new User;
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $patient = new patient;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->gender = $request->gender;
        $patient->position = $request->position;
        
        $patient->NIC = $request->nic;
        $patient->age = $request->age;
        $patient->specialization = $request->specialization;

        if($request->hasFile('file')) {
            $imageName = time().'.'.$request->file->extension();  
           
            $request->file->move(public_path('images'), $imageName);
    
            $patient->photo_path = $imageName;
                
            }  
            
            $user->patient()->save($patient);
    
            $user->assignRole('patient');
        
            return redirect()->route('patient.index')
                            ->with('success','Patient created successfully.');
        }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show doctors
        $patient=patient::find($id);
        $puser=$patient->user;

        return view('admin.patient.show',compact('patient','puser'));
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
        $patient=Pateint::find($id);
        // $puser=$patient->user;
        
        return view('admin.patients.edit',compact('patient'));
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
        request()->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
           
            
        ]);

        $user = User::find($id);
        
        $user->name = $request->name;
        $user->email = $request->email;
        
        if(!empty($request->password)){ 
            $user->password = Hash::make($request->password);
        }else{
            $user = Arr::except($user, ['password']);
            
        }

        $user->update();

        $patient = new Patient;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->gender = $request->gender;
        $patient->position = $request->position;
        
        $patient->NIC = $request->nic;
        $patient->age = $request->age;
        $patient->specialization = $request->specialization;

        if($request->hasFile('file')) {
            $imageName = time().'.'.$request->file->extension();  
           
            $request->file->move(public_path('images'), $imageName);
    
            $doctor->photo_path = $imageName;
            }
            
            $user->parent()->update($patient->toArray());
    
            // DB::table('model_has_roles')->where('model_id',$id)->delete();
        
            // $user->assignRole($request->input('roles'));
        
            return redirect()->route('patient.index')
                            ->with('success','Patient created successfully.');
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
        
        $user = User::find($id);
        
        $user->patient()->delete();
        $user->delete();

        return redirect()->route('patient.index')
        ->with('success','Patient deleted successfully');
    }
}
