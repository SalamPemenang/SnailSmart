<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('judul')</title>
	@include('partials.assets-head')
</head>
<body>

	@include('partials.header-user')

	@yield('content')

	@include('partials.footer-user')


	@include('partials.assets-foot')
</body>
</html>