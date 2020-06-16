<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TwoFactorAuthPassword;
use Carbon\Carbon;

class TwoFactorAuthController extends Controller
{
    public function login_form() {
      return view('two_factor_auth.login_form');
    }

    public function first_auth(Request $request) {
      $credentials = $request->only('email', 'password');

      if(\Auth::attempt($credentials)){

        $random_password = '';

        for($i = 0; $i < 4; $i++){
          $random_password .= strval(rand(0, 9));
        }

        $user = \App\User::where('email', $request->email)->first();
        $user->tfa_token = $random_password;
        $user->tfa_expiration = now()->addMinutes(10);
        $user->save();

        \Mail::to($user)->send(new TwoFactorAuthPassword($random_password));

        return [
          'result' => true,
          'user_id' => $user_id
        ];
      }
      return ['result' => false];
    }

    public function second_auth(Request $request) {
      $result = false;

      if($request->filled('tfa_token', 'user_id')){

        $user = \App\User::find($request->user_id);
        $expiration = new Carbon($user->tfa_token);

        if($user->tfa_token === $request->tfa_token && $expiration > now()){

          $user->tfa_token = null;
          $user->tfa_expiration = null;
          $user->save();

          \Auth::login($user);
          $result = true;
        }

      }
      return ['result' => $result];
    }
}
