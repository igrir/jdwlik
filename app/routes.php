<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
	// return View::make('hello');
// });

// Route::get('test', function(){
	// echo "testing";
// });

// Route::get('/halo', function(){
	// return "Halo, bro";
// });

Route::get('/halo', function()
{
    return "Halo, bro";
});

Route::get('/', 'JadwalikController@utama');

Route::get('utama','JadwalikController@utama');

Route::get('besok','JadwalikController@besok');
Route::get('menu','JadwalikController@menu');
Route::get('dosen','JadwalikController@getDosen');
Route::get('matakuliah','JadwalikController@getMataKuliah');
Route::get('ruangan','JadwalikController@getRuangan');
Route::get('hari','JadwalikController@getHari');
Route::get('detail', 'JadwalikController@getDetail');
Route::get('about', 'JadwalikController@getAbout');

Route::get('getdosen', function(){

	$kode_dosen = Input::get("kd");

	$dosen = Dosen::whereRaw("KODE_DOSEN=?", array($kode_dosen))->first();

	echo "<h1>".$dosen->DOSEN."</h1>";

	$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

	for ($i = 0; $i < count($hari); $i++) {

		echo "<h2>".$hari[$i]."</h2>";

		$jadwals = Jadwal::whereRaw("KODE_DOSEN=? && HARI = ?", array($kode_dosen, $i));

		foreach ($jadwals->get()->sortBy("JAM_MULAI") as $j) {
			echo $j->matakuliah->MATA_KULIAH."(".$j->matakuliah->KODE.")<br/>";
			echo "<small>".$j->dosen->DOSEN."(".$j->dosen->KODE_DOSEN.")</small><br/>";
			echo $j->JAM_MULAI."-".$j->JAM_AKHIR." ".$j->ruang->RUANG."<br/>";
			echo "kelas:".$j->kelas->NAMA_KELAS."</br>";
			echo "keterangan:".$j->KETERANGAN."</br>";
			echo "<hr/>";
		}
		
	}

});

Route::get('getruangan', function(){

	$kode_ruangan = Input::get("r");

	$ruangan = Ruang::whereRaw("ID_RUANG=?", array($kode_ruangan))->first();

	if ($ruangan != null) {
		echo "<h1>".$ruangan->RUANG."</h1>";

		$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

		for ($i = 0; $i < count($hari); $i++) {

			echo "<h2>".$hari[$i]."</h2>";

			$jadwals = Jadwal::whereRaw("ID_RUANG=? && HARI = ?", array($ruangan->ID_RUANG, $i));

			foreach ($jadwals->get()->sortBy("JAM_MULAI") as $j) {
				echo $j->matakuliah->MATA_KULIAH."(".$j->matakuliah->KODE.")<br/>";
				echo "<small>".$j->dosen->DOSEN."(".$j->dosen->KODE_DOSEN.")</small><br/>";
				echo $j->JAM_MULAI."-".$j->JAM_AKHIR." ".$j->ruang->RUANG."<br/>";
				echo "kelas:".$j->kelas->NAMA_KELAS."</br>";
				echo "keterangan:".$j->KETERANGAN."</br>";
				echo "<hr/>";
			}
			
		}
	}
});

Route::get('getmatakuliah', function(){

	$kode_mk = Input::get("mk");

	$matakuliah = Matakuliah::whereRaw("KODE=?", array($kode_mk))->first();

	if ($matakuliah != null) {
		echo "<h1>".$matakuliah->MATA_KULIAH."</h1>";

		$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

		for ($i = 0; $i < count($hari); $i++) {

			echo "<h2>".$hari[$i]."</h2>";

			$jadwals = Jadwal::whereRaw("KODE=? && HARI = ?", array($matakuliah->KODE, $i));

			foreach ($jadwals->get()->sortBy("JAM_MULAI") as $j) {
				echo $j->matakuliah->MATA_KULIAH."(".$j->matakuliah->KODE.")<br/>";
				echo "<small>".$j->dosen->DOSEN."(".$j->dosen->KODE_DOSEN.")</small><br/>";
				echo $j->JAM_MULAI."-".$j->JAM_AKHIR." ".$j->ruang->RUANG."<br/>";
				echo "kelas:".$j->kelas->NAMA_KELAS."</br>";
				echo "keterangan:".$j->KETERANGAN."</br>";
				echo "<hr/>";
			}
			
		}
	}
});