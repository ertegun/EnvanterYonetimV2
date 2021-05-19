<?php

namespace App\Http\Middleware;

use App\Models\SuperResetPassword;
use Closure;
use Illuminate\Http\Request;

class CheckSuperAdminNewPassword
{
    public function handle(Request $request, Closure $next)
    {
        $response = SuperResetPassword::where('token',$request->token)->first();
        if($response){
            if($request->password != $request->password_repeat){
                $alert = [
                    'alert_message' => 'Geçersiz Talep!',
                    'alert_type' => 'error'
                ];
                return back()->with($alert);
            }
        }
        else{
            $alert = [
                'alert_message' => 'Geçersiz Talep!',
                'alert_type' => 'error'
            ];
            return back()->with($alert);
        }

        return $next($request);
    }
}
