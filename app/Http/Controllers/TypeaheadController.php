<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use MBarlow\Megaphone\Types\Important;
use Illuminate\Notifications\Notification;
use App\Notifications\AppointmentNotification;

class TypeaheadController extends Controller
{
    public function doctorlist(Request $request)
    { 
        
          $query = $request->get('query');
          $users = User::where('name', 'LIKE', '%'. $query. '%')->get();
          //dd($user->getRoleNames());
          $response = array();
          
          foreach($users as $user){
            if($user->doctor != null){

             $response[] = array("value"=>$user->doctor->id,"label"=>$user->name);

                }
            }
          
          return response()->json($response);
    }
    public function nurselist(Request $request)
    { 
        
          $query = $request->get('query');
          $users = User::where('name', 'LIKE', '%'. $query. '%')->get();
          //dd($user->getRoleNames());
          $response = array();
          
          foreach($users as $user){
            if($user->nurse != null){

             $response[] = array("value"=>$user->nurse->id,"label"=>$user->name);

                }
            }
          
          return response()->json($response);
    }

    public function notif(Request $request){
      
     // dd($request);

      if($request->view  != '')
        {
          Auth::user()->unreadNotifications->markAsRead();
        }

        $notification=Auth::user()->unreadNotifications;
        $unseen_notification =$notification->count();

      
        return response()->json([
          'noti' => $notification,
          'count' => $unseen_notification,
        ]);

    }
}
