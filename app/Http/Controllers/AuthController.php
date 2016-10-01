<?php
namespace App\Http\Controllers;

use App\Http\Requests;

/**
 *
 */
class AuthController extends Controller
{

  public function login()
  {
    # code...
    return view ('auth.login');
  }
  public function handle_login(Request $request){
    $data = $request-> only('email','password');

  }
  public function register()
  {
    # code...
    return view ('auth.register');
  }
}
