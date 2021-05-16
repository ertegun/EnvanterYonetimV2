<?php

namespace App\Http\Controllers;

use App\Mail\SuperAdminForgot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class SuperAdminController extends Controller
{
    //Admin Giriş
    public function login(){
        return view('pages.admin.login');
    }
    //Admin Giriş Kontrol
    public function login_check(Request $request){
        $data = [
            'status' => 'success'
        ];
        if(!Auth::guard('super_admins')->attempt($request->only('user_name','password'))){
            $data['status'] = 'failed';
        }
        return response()->json($data);
    }
    //Admin Çıkış Yap
    public function logout(){
        Auth::guard('super_admins')->logout();
        return redirect()->route('admin_login');
    }
    //Admin Şifremi Unuttum
    public function forgot_mail(Request $request){
        $details = $request;
        $details->admin_name = 'Taha Yerlikaya';
        $details->admin_user_name = 'admin';
        $details->token = Str::random(32);
        Mail::to($request->email)->send(new SuperAdminForgot($details));
        return redirect()->route('admin_login');
    }

    //Admin Arayüz
    public function home()
    {
        return view('pages.admin.home.main');
    }
}
