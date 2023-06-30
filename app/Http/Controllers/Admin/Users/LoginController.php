<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\c;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;



class LoginController extends Controller
{
    public function index(){
        return view('admin.pages.login');
    }


    public function store(Request $request)
    {

        $email = $request -> input('email');
        $password = $request -> input('password');

        if(Auth::attempt([
            'email' => $email,
            'password' => $password,
        ])) {
            $user = User::where('email', $email) -> first();
            Auth::login($user);
            return redirect('admin/main');
        }

        Session::flash('error', "Email hoặc Passwork không đúng");
        return redirect()->back();

    }
}
