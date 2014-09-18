<!DOCTYPE html> 
<html>
<head>
	<title>Aplikasi Jadwal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo asset('jqmobile/jquery.mobile-1.4.4.min.css');?>" />
	<script src="<?php echo asset('jqmobile/jquery-1.11.1.min.js') ?>"></script>
	<script src="<?php echo asset('jqmobile/jquery.mobile-1.4.4.min.js') ?>"></script>
</head>

<body>
	<div data-role="page">
		
		@yield('header')
		<form class="ui-filterable">
			<input id="filterBasic-input" data-type="search">
		</form>
		@yield('content')
	</div>
</body>
</html>