<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>@stack('title') | {{config('app.name')}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<script src="{{asset('cdn-cgi/apps/head/8jwJmQl7fEk_9sdV6OByoscERU8.js')}}"></script>
<link rel="apple-touch-icon" href="{{asset('pages/ico/60.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('pages/ico/76.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('pages/ico/120.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('pages/ico/152.png')}}">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
@include('backoffice._includes.styles')
@stack('css')
</head>
<body class="fixed-header dashboard menu-pin {{-- menu-pin menu-behind --}}">
	@include('backoffice._components.nav')
	<div class="page-container">
		@include('backoffice._components.header')
		<div class="page-content-wrapper">
            @include('backoffice._components.page_load')
			@stack('content')
			@include('backoffice._components.footer')
		</div>
	</div>
	@include('backoffice._components.quick_view')
	@include('backoffice._components.search')
    @include('commons.modal',['logout' => route('backoffice.logout')])
    @include('backoffice._components.modal')
    @include('backoffice._includes.scripts')
    @stack('js')
</body>
</html>
