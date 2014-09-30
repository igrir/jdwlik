@extends('detail_matakuliah')

@section('search')
@stop

@section('content')
@stop

@section('nama')
@stop

@section('header')
<h1 >Jadwal Ilmu Komputer</h1>
<div data-role="navbar">
	<ul>
		<li ><a href="{{url('utama');}}">Hari Ini</a></li>
		<li><a href="{{url('besok');}}">Besok</a></li>
		<li><a href="{{url('menu')}}" class="ui-btn-active">Menu</a></li>
	</ul>
</div><!-- /navbar -->


@stop


@section('matakuliah')
	{{$MATAKULIAH}}
@stop

@section('kode_matakuliah')
	{{$KODE_MATAKULIAH}}
@stop

@section('tweet_link')
	https://twitter.com/search?q=%23jdwlik%20AND%20%23{{$KODE_MATAKULIAH}}&src=typd
@stop

@section('jadwal-senin')
	@foreach ($JADWALS[0] as $j)
		<li><a href="{{url('detail')}}?kode_jadwal={{$j->ID_JADWAL}}">
		<p>{{$j->dosen->DOSEN}}</p>
		<p>{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp {{$j->ruang->RUANG}}</p>		
		</a></li>
	@endforeach
@stop

@section('jadwal-selasa')
	@foreach ($JADWALS[1] as $j)
		<li><a href="{{url('detail')}}?kode_jadwal={{$j->ID_JADWAL}}">
		<p>{{$j->dosen->DOSEN}}</p>
		<p>{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp {{$j->ruang->RUANG}}</p>		
		</a></li>
	@endforeach
@stop

@section('jadwal-rabu')
	@foreach ($JADWALS[2] as $j)
		<li><a href="{{url('detail')}}?kode_jadwal={{$j->ID_JADWAL}}">
		<p>{{$j->dosen->DOSEN}}</p>
		<p>{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp {{$j->ruang->RUANG}}</p>		
		</a></li>
	@endforeach
@stop

@section('jadwal-kamis')
	@foreach ($JADWALS[3] as $j)
		<li><a href="{{url('detail')}}?kode_jadwal={{$j->ID_JADWAL}}">
		<p>{{$j->dosen->DOSEN}}</p>
		<p>{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp {{$j->ruang->RUANG}}</p>		
		</a></li>
	@endforeach
@stop

@section('jadwal-jumat')
	@foreach ($JADWALS[4] as $j)
		<li><a href="{{url('detail')}}?kode_jadwal={{$j->ID_JADWAL}}">
		<p>{{$j->dosen->DOSEN}}</p>
		<p>{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp {{$j->ruang->RUANG}}</p>		
		</a></li>
	@endforeach
@stop

@section('jadwal-sabtu')
	@foreach ($JADWALS[5] as $j)
		<li><a href="{{url('detail')}}?kode_jadwal={{$j->ID_JADWAL}}">
		<p>{{$j->dosen->DOSEN}}</p>
		<p>{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp {{$j->ruang->RUANG}}</p>		
		</a></li>
	@endforeach
@stop

@section('jadwal-minggu')
	@foreach ($JADWALS[6] as $j)
		<li><a href="{{url('detail')}}?kode_jadwal={{$j->ID_JADWAL}}">
		<p>{{$j->dosen->DOSEN}}</p>
		<p>{{$j->JAM_MULAI}}-{{$j->JAM_AKHIR}} &nbsp {{$j->ruang->RUANG}}</p>		
		</a></li>
	@endforeach
@stop

@section('count-jadwal-senin')
	@if ($JADWALS_COUNT[0] > 0)
		<span class="ui-li-count">{{$JADWALS_COUNT[0]}}</span>
	@endif
@stop

@section('count-jadwal-selasa')
	@if ($JADWALS_COUNT[1] > 0)
		<span class="ui-li-count">{{$JADWALS_COUNT[1]}}</span>
	@endif
@stop

@section('count-jadwal-rabu')
	@if ($JADWALS_COUNT[2] > 0)
		<span class="ui-li-count">{{$JADWALS_COUNT[2]}}</span>
	@endif
@stop

@section('count-jadwal-kamis')
	@if ($JADWALS_COUNT[3] > 0)
		<span class="ui-li-count">{{$JADWALS_COUNT[3]}}</span>
	@endif
@stop

@section('count-jadwal-jumat')
	@if ($JADWALS_COUNT[4] > 0)
		<span class="ui-li-count">{{$JADWALS_COUNT[4]}}</span>
	@endif
@stop

@section('count-jadwal-sabtu')
	@if ($JADWALS_COUNT[5] > 0)
		<span class="ui-li-count">{{$JADWALS_COUNT[5]}}</span>
	@endif
@stop

@section('count-jadwal-minggu')
	@if ($JADWALS_COUNT[6] > 0)
		<span class="ui-li-count">{{$JADWALS_COUNT[6]}}</span>
	@endif
@stop