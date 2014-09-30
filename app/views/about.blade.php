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

		</div>

		<div>
			<center>
				<h1>#JDWLIK</h1>
				Jadwal Mata Kuliah Program Studi Ilmu Komputer dan Pendidikan Ilmu Komputer<br/>
				Universitas Pendidikan Indonesia<br/>
				<br/>
				Pemutakhiran 1 Oktober 2014 <br/>
				<br/>
				Aplikasi ini dibuat oleh<br/>
				<a href="twitter.com/igrir">@igrir</a><br/>
				<a href="twitter.com/madelhaq">@madelhaq</a><br/>
				<br/>
			</center>
		</div>
		
	</div>
</body>
</html>