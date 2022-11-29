<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nurse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
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
            $user_nurses = DB::table('users')
            ->join('nurses', 'users.id', '=', 'nurses.user_id')
            ->where('status', '=', 1)
            ->select('users.*', 'nurses.*')
            ->paginate(5);
   
 




// $nurses = Nurse::latest()->paginate(5);
            return view('admin.nurses.index',compact('user_nurses'))
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
        return view('admin.nurses.create');
        
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

        $nurse = new Nurse;
        $nurse->phone = $request->phone;
        $nurse->address = $request->address;
        $nurse->gender = $request->gender;
        $nurse->position = $request->position;
        
        //$nurse->NIC = $request->nic;
        //$nurse->age = $request->age;
        
        $nurse->qualification = $request->qualification;

        if($request->hasFile('file')) {
        $imageName = time().'.'.$request->file->extension();  
       
        $request->file->move(public_path('images'), $imageName);

        $nurse->photo_path = $imageName;
            
        }  
        
        $user->nurse()->save($nurse);

        $user->assignRole('nurse');
    
        
    
        return redirect()->route('nurse.index')
                        ->with('success','Nurse created successfully.');
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
        $nurse=Nurse::find($id);
        $nuser=$nurse->user;
        return view('admin.nurses.show',compact('nurse','nuser'));
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
        $nurse=Nurse::find($id);
        return view('nurses.edit',compact('nurse'));
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
            'password' => 'required|string|min:8|confirmed',
        ]);
    
       
 
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        
        
        $nurse->user()->save($user);

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
