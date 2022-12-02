<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
    public function autocompleteSearch(Request $request)
    { 

        
          $query = $request->get('query');
          $users = User::where('name', 'LIKE', '%'. $query. '%')->get();
          //dd($user->getRoleNames());
          $response = array();
          foreach($users as $user){
             $response[] = array("value"=>$user->id,"label"=>$user->name);
          }

          
          return response()->json($response);
    }
}
