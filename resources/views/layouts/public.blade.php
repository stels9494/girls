<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>

@include('includes.header')

<body>
	@yield('content')
</body>

@include('includes.footer')

@include('includes.available')

<script src="{{ mix('/js/app.js') }}"></script>
</html>