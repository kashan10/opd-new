<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nurse;
use Illuminate\Http\Request;
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
        $users = User::all();
        $user_roles = [];
        $user_nurse = [];
        $nuser = [];

        
       
            foreach ($users as $user) {
            $user_roles=$user->getRoleNames();
                
              if($user_roles[0] == "nurse"){

                $user_nurse[] = User::find($user->id)->nurse;
                $nuser[] = User::find($user->id);
              }
            }

        
              
            //dd($nuser);

            
       
       // $nurses = Nurse::latest()->paginate(5);
        return view('admin.nurses.index',compact('user_nurse','nuser'))
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
        ]);
    
        $user = new User;
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        Nurse::create($request->all());
    
        return redirect()->route('admin.nurses.index')
                        ->with('success','Nurse created successfully.');
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
