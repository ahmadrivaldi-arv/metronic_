<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('primary-template/css/style.bundle.css') }}">
	<link rel="stylesheet" href="{{ asset('primary-template/plugins/global/plugins.bundle.css') }}">
	@routes
	@vite(['resources/js/app.js','resources/css/app.css'])
	<style>
		body{
            font-family: 'Poppins', sans-serif;
        }
	</style>
	@inertiaHead
</head>
<body id="kt_body" class="page-loading-enabled page-loading header-fixed header-tablet-and-mobile-fixed aside-enabled sidebar-enabled">
<!--layout-partial:partials/theme-mode/_init.html-->
<!--layout-partial:partials/_loader.html-->
<!--begin::loader-->
<div class="page-loader flex-column">
	<img alt="Logo" class="max-h-75px" src="{{asset('template-public/media/svg/brand-logos/django-community.svg')}}" width="100" height="100" />
	<div class="d-flex align-items-center mt-5">
		<span class="spinner-border text-primary" role="status"></span>
		<span class="text-muted fs-6 fw-semibold ms-5">Loading...</span>
	</div>
</div>
<!--end::Loader-->
<!--begin::Main-->
<!--begin::Root-->
@inertia
<!--end::Root-->
<!--layout-partial:partials/_drawers.html-->
<!--end::Main-->
<!--layout-partial:partials/_scrolltop.html-->
<!--begin::Modals-->
<!--layout-partial:partials/modals/_upgrade-plan.html-->
<!--layout-partial:partials/modals/users-search/_main.html-->
<!--layout-partial:partials/modals/_invite-friends.html-->
<!--end::Modals-->
<!--begin::Javascript-->
<script src="{{ asset('primary-template/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('primary-template/plugins/global/plugins.bundle.js') }}"></script>
<!--end::Javascript-->

</body>
</html>
