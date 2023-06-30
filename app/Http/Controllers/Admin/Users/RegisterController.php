<?php

namespace App\Http\Controllers\Admin\Users;
use App\Http\Requests\Users\RegisterRequests;
use App\Http\Controllers\Controller;
use App\Models\RegisterMode;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{

    public function index(){
        return view('admin.pages.register');
    }
    public function store(RegisterRequests  $request){

        $data = new RegisterMode();
        $check = DB::table('users')->where('email', $request->email)->count();

        if($check > 0){
            return redirect('/admin/register')->with('messageEmail','Email đã tồn tại');
        }

        $data['username'] = $request->username;
        Session::put('username', $data['username']);
        $data['email'] = $request->email;
        Session::put('email', $data['email']);
        $data['password'] = $request->password;
        Session::put('password', $data['password']);
        $repass = $request->repassword;

        if($repass != $data['password']){
            return redirect('/admin/register')->with('messagePassword','Password nhập lại không chính xác');
        }
        else{
            $maxacnhan = rand(100000,999999);
            Session::put('maxacnhan',$maxacnhan);
            $content = "Mã xác nhận của bạn là:".$maxacnhan;
            $mail_data= [
                'recipient' => $request->email,
                'fromEmail' => 'vdkteam@gmail.com',
                'fromName' => 'VDKTEAM',
                'body' => $content,
            ];

            Mail::send('email-template', $mail_data, function($message_email) use($mail_data){
                $message_email -> to($mail_data['recipient'])
                ->from($mail_data['fromEmail'], $mail_data['fromName']);
            });
            return redirect('/admin/maxacnhan');
        }


    }
    public function xacnhan(Request $request){

            if(Session::get('maxacnhan') != $request-> maxacnhan){
                return redirect('/admin/maxacnhan')->with('message','Mã xác nhận không trùng khớp');
            }else{
                $data['username'] = Session::get('username');
                $data['email'] = Session::get('email');
                $data['password'] = bcrypt(Session::get('password'));
                $data['level'] = 0;

                RegisterMode::create($data);
                return redirect('/admin/login');
            }
    }

}
