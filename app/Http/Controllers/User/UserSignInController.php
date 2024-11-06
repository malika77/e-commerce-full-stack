<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserSignInController extends Controller
{
    public function userSignIn(Request $request)
    {
      return response()->json([
          'user_first_name' => 'test',
          'user_last_name' =>'maa',
          'user_token' => 'assddff'
      ]);
    }
}
