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
       
       if ($user->hasRole('admin')) {
        # Admin...
        $clinics = Clinic::latest()->paginate(5);

       } elseif ($user->hasRole('doctor')) {
        
        # doctor...
        $clinics =$user->doctor->clinic;

       } elseif ($user->hasRole('nurse')) {
        # nurse...
        $clinics =$user->nurse->clinic;
                                          
       } else {
        # partition...
        $appoinment =  Appointment::latest()->paginate(5);
        // return view('products.index',compact('appoinment'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);

       }
       

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
        $appoinment= Appointment::where('clinic_id','=',$id)
                                ->paginate(5);
        //dd($appoinment);
        //
        return view('admin.appoinment.list',compact('appoinment'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
