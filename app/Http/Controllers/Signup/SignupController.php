<?php

namespace App\Http\Controllers\Signup;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view('Land Page.signup');
    }

    public function create(Request $request){
        if ($request->password != $request->conpass) {
            return redirect()->back();
        }

        $data=[
            'name'=>$request->name,
            'password'=>Hash::make($request->password),
            'email'=>$request->email
        ];
        $check=User::create($data);
        if ($check) {
            return view('Land Page.login');
        }
        else{
            return redirect()->back();
        }
    }
}
