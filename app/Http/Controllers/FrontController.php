<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function get_current_appointmentno(){

        $appointno = DB::table('appointments')
                    ->where('appoinment_status', '<>', 0)
                    ->orderBy('appoinment_No', 'desc')
                    ->value('appoinment_No');

                    dd($appointno);

    }
}
