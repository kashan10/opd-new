<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Models\User;
use App\Models\Clinic;
use App\Models\Treatment;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notifications\MyCustomNotification;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = [];

        $clinics = Clinic::get();

        foreach ($clinics as $clinic) {
            if (!$clinic->start) {
                continue;
            }

            $events[] = [
                'title' => $clinic->name ,
                'start' => $clinic->date.'T'.$clinic->start,
                'end' => $clinic->date.'T'.$clinic->start,
                'url'   => route('appointment.create', $clinic->id),
                'description'=> 'Lecture',
                
            ];
        }
//dd($events);
        return view('admin.calender.index', compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        
        $treatments = Treatment::get();
        try {

            $start_time =Time::select('etime')
                        ->latest()
                        ->take(1)
                        ->get();

        $start_time = json_decode(json_encode ( $start_time ) , true) ; 
        $start_time = implode(',',$start_time[0]);

        } catch (\Throwable $th) {
            $start_time = Clinic::find($id)->start;
        }
        
        

        
        
        return view('admin.appoinment.create',compact('treatments','id','start_time'));
        
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
        

        // DB::beginTransaction();

        
       // try {

        
        $treatment=Treatment::find($request->treatment);
      
        
        $treatment_time = Carbon::createFromFormat('H:i', $request->stime)->addMinutes($treatment->time)->toDateTimeString();
        
        $appointment = new Appointment();

        $appointment->start = $request->start;
        $appointment->end = $treatment_time;
        $appointment->patient_id = Auth::id();
        $appointment->treatment_id = $treatment->id;
        $appointment->note = $request->note;
        $appointment->way = $request->way;
        $appointment->form_content = "from content";
        $appointment->clinic_id = $request->clinic;

        

        $appointment->save();
       

        $time = new Time();
        $time->appointment_id = $appointment->id;
        $time->stime = $request->stime;
        $time->etime = $treatment_time;
        $time->save();

        // Incoming mail registration todo: I want to switch to database notification (Laravel)
        $mailType = 'confirm';
       
        $clinic = Clinic::find($request->clinic);
        $mailContent = $clinic->mailTemplates->firstWhere('type', $mailType);

        $mailSubject = $mailContent->title;
        $mailBody = $mailContent->body;

        $mailBody = str_replace('%patient name%', Auth::user()->name, $mailBody);

        $mailContent = 'Reservation date: ' . $clinic->date . "\n"
            . 'Treatment menu: ' . $treatment->treatment . "\n"
            . 'treatment time: ' . $treatment->time . "\n"
            . 'Your name: ' . Auth::user()->name . "\n"
            . 'phone number:' . Auth::user()->patient->phone . "\n"
            . 'E-mail: ' . Auth::user()->email . "\n"
            . 'Date of birth: ' . Auth::user()->patient->age . "\n\n";

        $mailBody = str_replace('%Content%', $mailContent, $mailBody);

       // dd($mailBody);
        //  $mailInbox = new MailInbox();
        //  $mailInbox->type = config('const.mail_inbox_type.new.value');
        //  $mailInbox->name = $request->patient_name;
        //  $mailInbox->email = $request->patient_email;
        //  $mailInbox->body = $mailBody;
        //  $mailInbox->clinic_id = $clinic->id;

        // $mailInbox->save();

        $patient = User::find(Auth::id());

        // notification todo: email only for now
        $patient->notify(new MyCustomNotification($mailSubject, $mailBody));
        dd($patient->notifications);
    //     DB::commit();
    // } catch (\Exception $exception) {
    //     DB::rollBack();
    // }

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
        dd($id);
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
