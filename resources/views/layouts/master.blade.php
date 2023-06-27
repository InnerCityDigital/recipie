<!DOCTYPE html>
<html>

	<head>

		<link rel="stylesheet" href="https://rsms.me/inter/inter.css">

		<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

		<title>Page Title</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@vite('resources/css/app.css')

	</head>

	<body>
		@yield('content', 'Default content')
	</body>

</html>