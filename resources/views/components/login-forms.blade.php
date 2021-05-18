<div id="signin_form" class="animate__animated animate__backInDown login-form">
    <form class="form" id="kt_login_singin_form" action="{{$check}}" method="POST">
        @csrf
        <div class="pb-5 pb-lg-15">
            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Giriş Yap</h3>
        </div>
        <div class="form-group">
            <label class="font-size-h6 font-weight-bolder text-dark">Kullanıcı Adı</label>
            <input id="signin_user_name" class="form-control h-auto py-7 px-6 rounded-lg border-1" type="text" name="user_name" autocomplete="off" autofocus placeholder="Kullanıcı Adı Giriniz"/>
        </div>
        <div class="form-group">
            <div class="d-flex justify-content-between mt-n5">
                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Şifre</label>
                <a id="forgot_button" role="button" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Şifremi Unuttum</a>
            </div>
            <input class="form-control h-auto py-7 px-6 rounded-lg border-1" type="password" name="password" autocomplete="off" placeholder="Şifre Giriniz" />
        </div>
        <div class="pb-lg-0 pb-5">
            <button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Giriş Yap</button>
        </div>
    </form>
</div>
<div id="forgot_form" class="animate__animated animate__backInDown login-form d-none">
    <form class="form" id="kt_login_forgot_form" action="{{$forgot}}" method="POST">
        @csrf
        <div class="pb-5 pb-lg-15">
            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Şifremi Unuttum</h3>
            <p class="text-muted font-weight-bold font-size-h4">Lütfen Sisteme Kayıtlı Olan Email Adresinizi Giriniz</p>
        </div>
        <div class="form-group">
            <input id="forgot_email" class="form-control h-auto py-7 px-6 border-1 rounded-lg font-size-h6" type="email" placeholder="Email Giriniz" name="email" autocomplete="off" />
        </div>
        <div class="form-group d-flex flex-wrap">
            <button type="submit" id="kt_login_forgot_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Gönder</button>
            <a id="forgot_cancel_button" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Vazgeç</a>
        </div>
    </form>
</div>
