<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="/img/title logo.png" type="image/png">
	<title>@yield('judul')</title>
	@include('partials.assets-head')
</head>
<body>


	@include('partials.ganti-warna')

	@include('partials.layouts')

    @yield('content')

	@include('partials.footer-user')

	@include('partials.assets-foot')

	<script src="/js/app.js"></script>
</body>
</html>