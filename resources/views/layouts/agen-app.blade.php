<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="/img/title logo.png" type="image/png">
	<title>Agen - @yield('judul')</title>
	@include('partials.assets-head')
</head>
<body>

	@include('partials.layouts-agen')

    @yield('content')

	@include('partials.footer-user')

	@include('partials.assets-foot')

</body>
</html>