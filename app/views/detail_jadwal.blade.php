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
	<div data-role="page"  >
		<div data-role="header" style="overflow:hidden;" data-add-back-btn="true">
			
			@yield('header')
			
			<ul class="ui-listview ui-listview-inset ui-corner-all ui-shadow" data-role="listview">
				<li data-icon="info" data-iconpos="right">
					<a href="#">@yield('matakuliah')</a>
				</li>
				<li data-icon="user" data-iconpos="right">
					<a href="#">@yield('dosen')</a>
				</li>
			</ul>
			
			@yield('search')
			@yield('content')
		</div>
	</div>
</body>
</html>