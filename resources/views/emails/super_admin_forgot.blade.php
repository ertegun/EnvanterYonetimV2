@component('mail::message')
Sayın <b>{{$details->admin_name}};</b><br><br>
   <div style="text-align: center">Şifre sıfırama talebiniz alınmıştır. Aşağıdaki butona tıklayarak yeni şifrenizi oluşturabilirsiniz.</div>
   <br>
   <h4 style="text-align: center"><b><u>Kullanıcı Adınız:</u></b> {{$details->admin_user_name}}</h4>
@component('mail::button', ['url' => route('admin_forgot',['token'=>$details->token])])
Şifremi Sıfırla
@endcomponent

<div style="text-align: center">İyi Günler Dileriz</div><br>
@endcomponent
