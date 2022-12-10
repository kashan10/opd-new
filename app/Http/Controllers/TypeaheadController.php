<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use MBarlow\Megaphone\Types\Important;
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

    public function notif(){

      $offerData = [
        'title' => 'You received an offer.',
        'body' => 'You received an offer.',
        'thanks' => 'Thank you',
        'offerText' => 'Check out the offer',
        'offerUrl' => url('/'),
        'offer_id' => 007
    ];
      $notification = new \MBarlow\Megaphone\Types\Important(
        'Expected Downtime!', // Notification Title
      'We are expecting some downtime today at around 15:00 UTC for some planned maintenance. Read more on a blog post!', // Notification Body
      'https://example.com/link', // Optional: URL. Megaphone will add a link to this URL within the Notification display.
      'Read More...' // Optional: Link Text. The text that will be shown on the link button.
    );

      $user =User::find(1);
     // $delay = now()->addMinutes(10);
      $user->notify($notification);

    }
}
