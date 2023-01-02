<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    //page field is defined in the request
   $user_doctors = DB::table('users')
        ->join('doctors', 'users.id', '=', 'doctors.user_id')
        ->where('status', '=', 1)
        ->select('users.*', 'doctors.*')
        ->paginate(5);
            
          
   // $nurses = Nurse::latest()->paginate(5);
    return view('admin.doctors.index',compact('user_doctors'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$all_users_with_all_their_roles = User::with('roles')->get();
        //$users = User::all();
        // $user_roles = [];
        // $user_doctors = [];
        // $doctor = [];

        // foreach ($users as $user) {

        // $user_roles=$user->getRoleNames();
            
        //   if($user_roles[0] == "doctor"){

        //     $user_doctors[] = User::find($user->id)->doctor;
        //     $duser[] = User::find($user->id);
        //   }
        // }
       
        return view('admin.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate([
            'name'=> 'required',
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

        $doctor = new Doctor;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->gender = $request->gender;
        $doctor->position = $request->position;
        
        $doctor->NIC = $request->nic;
        $doctor->age = $request->age;
        $doctor->specialization = $request->specialization;

        if($request->hasFile('file')) {
        $imageName = time().'.'.$request->file->extension();  
       
        $request->file->move(public_path('images'), $imageName);

        $doctor->photo_path = $imageName;
            
        }  
        
        $user->doctor()->save($doctor);

        $user->assignRole('doctor');
    
        return redirect()->route('doctor.index')
                        ->with('success','Doctor created successfully.');
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
        $doctor=Doctor::find($id);
        $duser=$doctor->user;

        return view('admin.doctors.show',compact('doctor','duser'));
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
        $doctor=Doctor::find($id);
       // $duser=$doctor->user;
        
        return view('admin.doctors.edit',compact('doctor'));
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

        $doctor = new Doctor;
        $doctor->phone = $request->phone;
        $doctor->address = $request->address;
        $doctor->gender = $request->gender;
        $doctor->position = $request->position;
        
        $doctor->NIC = $request->nic;
        $doctor->age = $request->age;
        $doctor->specialization = $request->specialization;

        
        if($request->hasFile('file')) {
        $imageName = time().'.'.$request->file->extension();  
       
        $request->file->move(public_path('images'), $imageName);

        $doctor->photo_path = $imageName;
        }
        
        $user->doctor()->update($doctor->toArray());

        // DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        // $user->assignRole($request->input('roles'));
    
        return redirect()->route('doctor.index')
                        ->with('success','Doctor created successfully.');
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
        
        $user->doctor()->delete();
        $user->delete();

        return redirect()->route('doctor.index')
        ->with('success','Doctor deleted successfully');
        
    }
}