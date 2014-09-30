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
			<li> <a href="{{url('detail')}}?kode_mk={{$KODE_MK}}" style="white-space:normal"> @yield('matakuliah')-@yield('kode_matakuliah') </a> </li>
			<li data-role="list-divider">Nama dosen</li>
			<li> <a href="{{url('detail')}}?kode_dosen={{$KODE_DOSEN}}" style="white-space:normal"> @yield('dosen')-@yield('kode_dosen') </a> </li>
			<li data-role="list-divider">Ruangan</li>
			<li> <a href="{{url('detail')}}?id_ruang={{$ID_RUANG}}" style="white-space:normal"> @yield('ruangan')</a> </li>
			<li data-role="list-divider">Keterangan</li>
			<li style="white-space:normal"><small>@yield('keterangan')</small></li>
		</ul>

		<a href="@yield('tweet_link')" class="ui-btn" rel="external" target="blank">Info Tweet</a>

		<a class="ui-btn"
		  href="https://twitter.com/share?text=%23jdwlik%20%23{{$KODE_MK}}%20%23{{$KODE_DOSEN}}">
		  Post Tweet
		</a>
		
	</div>
</body>
</html>