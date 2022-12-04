<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
