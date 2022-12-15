<?php

namespace App\Http\Controllers;

use App\Models\Time;
use App\Models\Appointment;
use App\Models\Clinic;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
                //'url'   => route('appointment.edit', $clinic->id),
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
    public function create()
    {
        //
        $treatment_time = Time::where('status', 1)
                            ->latest()
                            ->first();

        return view('admin.appoinment.create','treatment_time');
        
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
        
        DB::beginTransaction();

        
        try {

        
        $treatment=Treatment::find($request->treatment_id);
        $treatment_time = Carbon::createFromFormat('Y-m-d H:i', $request->start)->addMinutes($treatment->time)->toDateTimeString();

        $appointment = new Appointment();

        $appointment->start = $request->start;
        $appointment->end = $treatment_time;
        $appointment->patient_id = Auth::id();
        $appointment->treatment_id = $request->treatment_id;
        $appointment->unit = $request->unit;
        $appointment->note = $request->note;
        $appointment->clinic_id = $request->id;


        $appointment->save();
       

        $time = new Time();
        $time->appointment_id = $appointment->id;
        $time->stime = $request->start;
        $time->etime = $treatment_time;
        $time->save();

        // Incoming mail registration todo: I want to switch to database notification (Laravel)
        $mailType = 'confirm';
        $mailContent = $clinic->webAppointmentMails->firstWhere('type', $mailType);

        $mailSubject = $mailContent->title;
        $mailBody = $mailContent->body;

        $mailBody = str_replace('%patient name%', $request->patient_name, $mailBody);

        $mailContent = 'Reservation date: ' . $request->time_label . "\n"
            . 'Treatment menu: ' . $request->treatment . "\n"
            . 'treatment time: ' . $request->treatment_time . "分\n"
            . 'Your name: ' . $request->patient_name . "\n"
            . 'phone number:' . $request->patient_tel . "\n"
            . 'E-mail: ' . $request->patient_email . "\n"
            . 'Date of birth: ' . $request->patient_birthday . "\n\n"
            . "Practice Confirmation: \n" . url('/web/appointment/' . $app_key . '/list') . "\n";

        $mailBody = str_replace('%Content%', $mailContent, $mailBody);

        $mailInbox = new MailInbox();
        $mailInbox->type = config('const.mail_inbox_type.new.value');
        $mailInbox->name = $request->patient_name;
        $mailInbox->email = $request->patient_email;
        $mailInbox->body = $mailBody;
        $mailInbox->clinic_id = $clinic->id;

        $mailInbox->save();

        $patient = Auth::user();

        // notification todo: email only for now
        $patient->notify(new WebAppointmentNotify($mailSubject, $mailBody));

        DB::commit();
    } catch (\Exception $exception) {
        DB::rollBack();
    }

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
