<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    function connect(Request $request){
      if (Auth::attempt($request->all())){
          return Auth::user()->api_token;
      }else{
          return  'false';
      }
    }
}
