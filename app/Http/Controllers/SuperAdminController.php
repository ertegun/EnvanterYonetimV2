<?php

namespace App\Http\Controllers;

use App\Mail\SuperAdminForgot;
use App\Models\SuperAdmin;
use App\Models\SuperResetPassword;
use App\Models\SuperTransaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use stdClass;

class SuperAdminController extends Controller
{
    //SUPER ADMİN GİRİŞ/ÇIKIŞ İŞLEMLERİ
        //Giriş
        public function login(){
            //Sayfa İçin Gerekli Değişkenler
            $data = new stdClass;
            $data->title = 'Yetkili Girişi';
            $data->description = 'Yetkili Girişi';
            $data->check_url = route('admin_login_check');
            $data->forgot_url = route('admin_forgot_mail');
            $data->home_url = route('admin_home');
            return view('pages.admin.login',compact('data'));
        }
        //Giriş Kontrol
        public function login_check(Request $request){
            //Gelen Kullanıcı Adı ve Şifre Uyuşuyorsa Oturum Açar ve Veri Tabanına Kaydeder
            if(!Auth::guard('super_admins')->attempt($request->only('user_name','password'))){
                $data['status'] = 'failed';
            }
            else{
                $data['status'] = 'success';
                //Oturum Açıldı
                SuperTransaction::insert([
                    'admin_id' => Auth::guard('super_admins')->id(),
                    'type_id' => 4,
                    'created_by_IP' => $request->ip(),
                    'created_at' => Carbon::now()
                ]);
            }
            //Fetch İle Çalışıyor !
            return response()->json($data);
        }
        //Çıkış Yap
        public function logout(Request $request){
            //Oturum Kapandı
            SuperTransaction::insert([
                'admin_id' => Auth::guard('super_admins')->id(),
                'type_id' => 5,
                'created_by_IP' => $request->ip(),
                'created_at' => Carbon::now()
            ]);
            //Oturumu Kapat
            Auth::guard('super_admins')->logout();
            return redirect()->route('admin_login');
        }
        //Şifremi Unuttum Mail Gönderme
        public function forgot_mail(Request $request){

            //Token Oluşturma
            $token = Str::random(32);
            //Girilen Emailden Super Admin Bulma
            $admin = SuperAdmin::where('email',$request->email)->first();
            SuperResetPassword::insert([
                'token' => $token,
                'admin_id' => $admin->id,
                'created_by_IP' => $request->ip(),
                'expired_at' => Carbon::now()->addHour()
            ]);

            //Mail İçeriği
            $details = new stdClass;
            $details->admin_name = $admin->name;
            $details->admin_user_name = $admin->user_name;
            $details->token = $token;
            //Mail Gönderim
            Mail::to($request->email)->send(new SuperAdminForgot($details));
            //Mesaj İçeriği (Session)
            $alert = [
                'alert_message' => 'Şifre Sıfırlama Maili Gönderildi',
                'alert_type' => 'success'
            ];
            //Şifre Sıfırlama Talebi
            SuperTransaction::insert([
                'admin_id' => $admin->id,
                'type_id' => 1,
                'created_by_IP' => $request->ip(),
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('admin_login')->with($alert);
        }
        //Şifre Sıfırlama Sayfası
        public function forgot(Request $request,$token){
            //Tokenden Super Admini Bulma
            $response = SuperResetPassword::where('token',$token)->first();
            //Sayfa Değişkenleri
            $data = new stdClass;
            $data->title = "Yetkili Şifre Sıfırlama";
            $data->description = 'Yetkili Şifre Sıfırlama';
            $data->reset = route('admin_reset_password');
            $data->name = $response->adminInfo->name;
            $data->token = $token;

            return view('pages.admin.forgot',compact('data'));
        }
        //Şifre Sıfırlama
        public function reset_password(Request $request){
            //Tokenden Super Admini Bulma
            $response = SuperResetPassword::where('token',$request->token)->first();
            //Super Admin Şifre Güncelleme
            SuperAdmin::where('id',$response->admin_id)->update([
                'password' => bcrypt($request->password)
            ]);
            //Oturum Açma
            Auth::guard('super_admins')->loginUsingId($response->admin_id);
            //Şifre Sıfırlama Talebini Kaldırma
            SuperResetPassword::where('token',$request->token)->delete();
            //Yapılan İşlemleri Kaydetme
            SuperTransaction::insert([
                //Yeni Şifre İşlemi
                [
                    'admin_id' => Auth::guard('super_admins')->id(),
                    'type_id' => 2,
                    'created_by_IP' => $request->ip(),
                    'created_at' => Carbon::now()
                ],
                //Oturum Açıldı
                [
                    'admin_id' => Auth::guard('super_admins')->id(),
                    'type_id' => 4,
                    'created_by_IP' => $request->ip(),
                    'created_at' => Carbon::now()
                ]
            ]);

            return redirect()->route('admin_home');
        }
    //SUPER ADMİN GİRİŞ/ÇIKIŞ İŞLEMLERİ

    //SUPER ADMİN DASHBOARD İŞLEMLERİ
        //Admin Arayüz
        public function home()
        {
            //Sayfa Değişkenleri
            $data = new stdClass;
            $data->title = "Ana Sayfa";
            $data->description = 'Ana Sayfa';

            return view('pages.admin.home.main',compact('data'));
        }

    //SUPER ADMİN DASHBOARD İŞLEMLERİ
}
