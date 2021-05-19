<?php

namespace App\Http\Middleware;

use App\Models\SuperAdmin;
use App\Models\SuperResetPassword;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class CheckSuperAdminEmail
{
    public function handle(Request $request, Closure $next)
    {
        $admin = SuperAdmin::where('email',$request->email)->first();
        if($admin){
            $last_request = SuperResetPassword::where('admin_id',$admin->id)->first();
            if($last_request){
                if(Carbon::create($last_request->expired_at)->gt(Carbon::now())){
                    $alert = [
                        'alert_message' => 'Bir Saat İçerisinde Talep Oluşturulmuş!',
                        'alert_type' => 'error'
                    ];
                    return back()->with($alert);
                }
            }
        }
        else{
            $alert = [
                'alert_message' => 'Bu Email Adresi Sistemimizde Kayıtlı Değil!',
                'alert_type' => 'error'
            ];
            return back()->with($alert);
        }

        return $next($request);
    }
}
