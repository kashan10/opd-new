<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
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
    $users = User::all();
    $user_roles = [];
    $user_doctors = [];
    $doctor = [];
  
    
   
        foreach ($users as $user) {
        $user_roles=$user->getRoleNames();
            
          if($user_roles[0] == "doctor"){

            $user_doctors[] = User::find($user->id)->doctor;
            $duser[] = User::find($user->id);
          }
        }

    
          
        //dd($user_doctors);

        
   
   // $nurses = Nurse::latest()->paginate(5);
    return view('admin.doctors.index',compact('user_doctors','duser'))
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
        ]);
    
        $user = new User;
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Doctor::create($request->all());
    
        return redirect()->route('admin.doctor.index')
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
