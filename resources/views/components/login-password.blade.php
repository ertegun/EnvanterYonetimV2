<div id="forgot_form" class="login-form">
    <form class="form" id="kt_login_singin_form" action="{{$reset}}" method="POST">
        @csrf
        <div class="pb-5 pb-lg-15">
            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sayın {{$name}}</h3>
            <p class="text-muted font-weight-bold font-size-h4">Lütfen Yeni Şifrenizi Belirleyiniz</p>
        </div>
        <label class="font-size-h6 font-weight-bolder text-dark">Yeni Şifre</label>
        <div class="input-group">
            <input class="password_control form-control h-auto py-7 px-6 border-1" type="password" name="password" autocomplete="off" autofocus placeholder="Yeni Şifre"/>
            <div class="input-group-append">
                <button class="btn btn-outline-secondary password_button" type="button"><i class="fa fa-eye"></i></button>
            </div>
        </div>
        <span id="match_error" class="form-text text-danger d-none">Şifreler Uyuşmuyor</span>
        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Şifre Tekrar</label>
        <div class="input-group">
            <input class="password_control form-control h-auto py-7 px-6 border-1" type="password" name="password_repeat" autocomplete="off" placeholder="Şifre Tekrar" />
            <div class="input-group-append">
                <button class="btn btn-outline-secondary password_button" type="button"><i class="fa fa-eye"></i></button>
            </div>
        </div>
        <div class="pb-lg-0 pb-5">
            <button id="submit_button" type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Kaydet</button>
        </div>
        <input type="hidden" name="token" value="{{$token}}">
    </form>
</div>
