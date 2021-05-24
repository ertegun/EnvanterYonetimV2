<!DOCTYPE html>
<html lang="tr">
	<head>
		<meta charset="utf-8" />
		<title>Envanter Yönetim | {{$data->title ?? "Sayfa Bulunamadı"}}</title>
        <meta name="description" content="{{$data->description ?? "Sayfa Bulunamadı"}}"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="{{asset('css/pages/login/fonts.css')}}" />
		<link href="{{asset('css/pages/login/login-3.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/animate_4.1.1.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/alert.css')}}"/>
		<link rel="shortcut icon" href="{{asset('media/logos/main_dark.png')}}" />
        @yield('css')
	</head>
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<div class="d-flex flex-column flex-root">
			<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
				<div class="login-aside d-flex flex-column flex-row-auto">
					<div class="d-flex flex-column-auto flex-column">
						<a href="http://www.gruparge.com" class="login-logo text-center pt-10 pb-10">
							<img src="{{asset('media/logos/company.png')}}" class="max-h-70px" alt="" />
						</a>
						<h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">
						    Envanter Yönetim | {{$data->title ?? ""}}
                        </h3>
					</div>
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="background-position-y: calc(100% + 5rem); background-image: url({{asset('media/svg/illustrations/login-visual-4.svg')}})"></div>
				</div>
                <div class="login-content flex-row-fluid d-flex flex-column p-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center">
