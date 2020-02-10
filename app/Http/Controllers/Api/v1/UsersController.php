<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersController extends Controller
{

public function userslist(){
      //$user=DB::table('users')->where('id','=',1)->select("created_at","updated_at","name")->get();
      //$user=DB::table('users')-->select("created_at","updated_at","name")->get();
      return response()->json([
          "status"=>200,
          "user" => $user
      //fetching indiviidual items  // "user"=>["created_at"=>$user[0]->created_at, "updated_at"=>$user[0]->updated_at, "user" => $user[0]->name]

          // "user"=>$user[1]->updated_at,
      ]);
  }
}
