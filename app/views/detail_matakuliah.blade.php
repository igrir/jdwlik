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

		<ul data-role="listview" >
			<li data-role="list-divider">Nama matakuliah</li>
			<li>@yield('matakuliah')</li>
			<li data-role="list-divider">Kode matakuliah</li>
			<li>@yield('kode_matakuliah')</li>
		</ul>

		<a href="@yield('tweet_link')" class="ui-btn" rel="external" target="blank">Info Tweet</a>
		<a class="ui-btn"
		  href="https://twitter.com/share?text=%23jdwlik%20%23{{$KODE_MATAKULIAH}}">
		  Post Tweet
		</a>
		
		<div data-role="collapsible-set">
			<div data-role="collapsible">
			   <h3>Senin @yield('count-jadwal-senin') </h3>
			   
				<ul data-role="listview" >
					@yield('jadwal-senin')
				</ul>

			</div>
			<div data-role="collapsible">
			   <h3>Selasa @yield('count-jadwal-selasa')</h3>
			   
				<ul data-role="listview" >
					@yield('jadwal-selasa')
				</ul>
			</div>
			<div data-role="collapsible">
			   <h3>Rabu @yield('count-jadwal-rabu')</h3>
			   
				<ul data-role="listview" >
					@yield('jadwal-rabu')
				</ul>
			</div>
			<div data-role="collapsible">
			   <h3>Kamis @yield('count-jadwal-kamis')</h3>
			   
				<ul data-role="listview" >
					@yield('jadwal-kamis')
				</ul>
			</div>
			<div data-role="collapsible">
			   <h3>Jumat @yield('count-jadwal-jumat')</h3>
			   
				<ul data-role="listview" >
					@yield('jadwal-jumat')
				</ul>
			</div>
			<div data-role="collapsible">
			   <h3>Sabtu @yield('count-jadwal-sabtu')</h3>
			   
				<ul data-role="listview" >
					@yield('jadwal-sabtu')
				</ul>
			</div>
			<div data-role="collapsible">
			   <h3>Minggu @yield('count-jadwal-minggu')</h3>
			   
				<ul data-role="listview" >
					@yield('jadwal-minggu')
				</ul>
			</div>
		</div>

	</div>
</body>
</html>