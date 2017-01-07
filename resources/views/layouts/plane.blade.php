<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>Director and Company Secretary's Module</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>

	<link type="text/css" rel="stylesheet" href="{{ asset("css/jsgrid.min.css") }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset("css/jsgrid-theme.min.css") }}" />
	<script src="{{ asset("js/jquery-3.1.1.js") }}"></script>
	<script type="text/javascript" src="{{ asset("js/jsgrid.min.js") }}"></script>
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
</body>
</html>