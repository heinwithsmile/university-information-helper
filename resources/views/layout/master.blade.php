<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>
<!-- Using precombined bootstrap file -->
	<link rel="stylesheet"  href="{!!asset('/css/style.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap-grid.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap-grid.min.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap-reboot.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap-reboot.min.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/css/bootstrap.min.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/fonts/font-awesome.css')!!}">
	<link rel="stylesheet"  href="{!!asset('/fonts/font-awesome.min.css')!!}">

</head>
@yield('navigation')
<body>
@yield('content')
@yield('footer')
<script src="{!!asset('/js/jquery-3.3.1.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.min.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.bundle.js')!!}"></script>
<script src="{!!asset('/js/bootstrap.bundle.min.js')!!}"></script>

</body>
</html>