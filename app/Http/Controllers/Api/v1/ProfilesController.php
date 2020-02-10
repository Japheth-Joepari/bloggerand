<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class ProfilesController extends Controller
{
  public function profileslist(){
    $profiles = Profile::all();
    return response()->json([
      "status" => 200,
      "profiles" => $profiles
    ]);
  }
}
