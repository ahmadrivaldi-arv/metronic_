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

@inertia

<!--begin::Javascript-->
<script src="{{ asset('primary-template/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('primary-template/plugins/global/plugins.bundle.js') }}"></script>
<!--end::Javascript-->

</body>
</html>
