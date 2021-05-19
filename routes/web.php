<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Middleware\CheckSuperAdminEmail;
use App\Http\Middleware\CheckSuperAdminToken;
use App\Http\Middleware\SuperAdminAuth;
use App\Http\Middleware\SuperAdminLogin;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/giris', [PagesController::class, 'login'])->name('login');

//Super Admin
    Route::prefix('admin')->name('admin_')->group(function () {
        //Giriş Yap
        Route::get('', [SuperAdminController::class, 'login'])->middleware(SuperAdminLogin::class)->name('login');
        //Giriş Kontrol
        Route::post('/giris',[SuperAdminController::class,'login_check'])->name('login_check');
        //Çıkış Yap
        Route::get('/cikis',[SuperAdminController::class,'logout'])->name('logout');
        //Şifre Sıfırla Sayfası
        Route::get('/sifre_sifirla/{token}',[SuperAdminController::class,'forgot'])->middleware(CheckSuperAdminToken::class)->name('forgot');
        //Şifre Sıfırlama Mail Gönderme
        Route::post('/sifre_sifirla_mail',[SuperAdminController::class,'forgot_mail'])->middleware(CheckSuperAdminEmail::class)->name('forgot_mail');
        //Şifre Sıfırlama
        Route::post('/sifre_sifirla/onay',[SuperAdminController::class,'reset_password'])->middleware(CheckSuperAdminToken::class)->name('reset_password');
        //İşlemler
        Route::middleware(SuperAdminAuth::class)->group(function () {
            //Ana Sayfa
            Route::get('/anasayfa', [SuperAdminController::class, 'home'])->name('home');
        });
    });
//Super Admin

// Demo routes
Route::get('/datatables', [PagesController::class, 'datatables']);
Route::get('/ktdatatables', [PagesController::class, 'ktDatatables']);
Route::get('/select2', [PagesController::class, 'select2']);
Route::get('/jquerymask', [PagesController::class, 'jQueryMask']);
Route::get('/icons/custom-icons', [PagesController::class, 'customIcons']);
Route::get('/icons/flaticon', [PagesController::class, 'flaticon']);
Route::get('/icons/fontawesome', [PagesController::class, 'fontawesome']);
Route::get('/icons/lineawesome', [PagesController::class, 'lineawesome']);
Route::get('/icons/socicons', [PagesController::class, 'socicons']);
Route::get('/icons/svg', [PagesController::class, 'svg']);

// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', [PagesController::class, 'quickSearch'])->name('quick-search');
