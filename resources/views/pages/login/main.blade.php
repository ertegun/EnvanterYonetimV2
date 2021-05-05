
<!DOCTYPE html>
<html lang="tr">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Giriş Yap | Envanter Yönetim</title>
		<meta name="description" content="Giriş Yap" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{asset('css/pages/login/login-3.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('media/logos/e_trans.png')}}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column">
						<!--begin::Aside header-->
						<a href="http://www.gruparge.com" class="login-logo text-center pt-10 pb-10">
							<img src="{{asset('media/logos/arge_trans.png')}}" class="max-h-70px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin::Aside Title-->
						<h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl">
						    Envanter Yönetim
                        </h3>
						<!--end::Aside Title-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center" style="background-position-y: calc(100% + 5rem); background-image: url({{asset('media/svg/illustrations/login-visual-4.svg')}})"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column p-10">
					<!--begin::Wrapper-->
					<div class="d-flex flex-row-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form">
							<!--begin::Form-->
							<form class="form" id="kt_login_singin_form" action="">
								<!--begin::Title-->
								<div class="pb-5 pb-lg-15">
									<h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Giriş Yap</h3>
								</div>
								<!--begin::Title-->
								<!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
									<input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="text" name="email" autocomplete="off" autofocus/>
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Şifre</label>
										<a href="custom/pages/login/login-3/forgot.html" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5">Şifremi Unuttum</a>
									</div>
									<input class="form-control h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off" />
								</div>
								<!--end::Form group-->
								<!--begin::Action-->
								<div class="pb-lg-0 pb-5">
									<button type="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Giriş Yap</button>
								</div>
                                <h3 class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl pt-10">
                                    Grup Arge {{date('Y')}} &copy;
                                </h3>
								<!--end::Action-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('js/scripts.bundle.js')}}"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="{{asset('js/pages/custom/login/login-3.js')}}"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
