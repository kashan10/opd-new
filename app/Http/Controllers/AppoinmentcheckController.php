<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Clinic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\ElseIf_;
use \Spatie\Permission\Models\Role;

class AppoinmentcheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $user=User::find(Auth::id());
       
       if ($user->hasRole('Admin')) {
        # Admin...
        $clinics = Clinic::latest()->paginate(5);

       } elseif ($user->hasRole('Doctor')) {
        
        # doctor...
        $clinics = Clinic::addSelect(['doctor_id' => $user
                                                        ->Doctor()
                                                        ->select('id')
                                                        ->limit(1)
                                            ])->get();

       } elseif ($user->hasRole('nurse')) {
       // dd("hi");
        # nurse...
        $clinics = Clinic::addSelect(['nurse_id' => $user
                                                    ->nurse()
                                                    ->select('id')
                                                    ->where('user_id','=',Auth::id())
                                                    ->limit(1)
                                            ])->get();
                                            dd($clinics);                                    
       } else {
        # partition...
        $appoinment =  Appointment::latest()->paginate(5);
        // return view('products.index',compact('appoinment'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

       }
       
        //partition
        //  $appoinment = ($user->hasRole('Admin')) ? Appointment::latest()->paginate(5) : (($user->hasRole('Doctor')) ? User::find(Auth::id())->latest()->paginate(5) : (($user->hasRole('Nurse')) ? Appointment::latest()->paginate(5) : Appointment::latest()->paginate(5) ) );

        // //doctor
        
        // $appoinment =$user->Doctor()->select('id')->get();
        //dd($clinics);

        $events = [];

        foreach ($clinics as $clinic) {
            if (!$clinic->start) {
                continue;
            }

            $events[] = [
                'title' => $clinic->name ,
                'start' => $clinic->date.'T'.$clinic->start,
                'end' => $clinic->date.'T'.$clinic->start,
                'url'   => route('appcheck.show', $clinic->id),
                'description'=> 'Lecture',
                
            ];
        }

        
        
            return view('admin.calender.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
