@extends('layout.login.master')
@section('content')
    <x-login-password :reset="$data->reset" :name="$data->name" :token="$data->token"></x-login-password>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/inputs.css')}}"/>
@endsection
@section('script')
    <script src="{{asset('js/pages/custom/login/forgot.js')}}"></script>
@endsection
