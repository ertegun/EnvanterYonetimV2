<?php

namespace App\Http\Middleware;

use App\Models\SuperResetPassword;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class CheckSuperAdminToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $response = SuperResetPassword::where('token',$request->token)->first();
        if($response){
            if(Carbon::create($response->expired_at)->lt(Carbon::now())){
                $alert = [
                    'alert_message' => 'Geçersiz Talep!',
                    'alert_type' => 'error'
                ];
                SuperResetPassword::where('token',$request->token)->delete();
                return redirect()->route('admin_login')->with($alert);
            }
        }
        else{
            $alert = [
                'alert_message' => 'Geçersiz Talep!',
                'alert_type' => 'error'
            ];
            return redirect()->route('admin_login')->with($alert);
        }

        return $next($request);
    }
}
