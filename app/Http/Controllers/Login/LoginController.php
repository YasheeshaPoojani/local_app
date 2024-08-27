<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('Land Page.login');
    }

    public function checklogin(Request $request){
        $check=Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
        if ($check) {
            return view('cat1');
        }
        return redirect()->back();
    }
}
