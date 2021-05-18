@extends('layout.login.master')
@section('content')
    <x-login-forms :check="$data->check_url" :forgot="$data->forgot_url" ></x-login-forms>
@endsection
@section('script')
    <script>
        var home_url = "{{$data->home_url}}";
    </script>
    <script src="{{asset('js/pages/custom/login/login-3.js')}}"></script>
@endsection
