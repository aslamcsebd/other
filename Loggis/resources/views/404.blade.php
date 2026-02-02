<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>404 : Error Page</title>
		{{-- <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}"> --}}
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body class="container-fluid mt-5 pt-5">
		<div class="alert alert-danger text-center">
			<h2 class="display-1">404</h2>
			<p class="display-5">Oops! Something is wrong.</p>
			<a href="{{url('/')}}" class="btn btn-success p-2 fs-5">Return home</a>
		</div>
	</body>
</html>