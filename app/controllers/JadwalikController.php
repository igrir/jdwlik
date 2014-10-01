<?php
class JadwalikController extends BaseController{
	public function utama(){
		$today = date("w", time())-1;
		$tomorrow = ($today>=6?0:$today+1);

		$jadwals = Jadwal::whereRaw("HARI=?",array($today));

		return View::make('cutama')->with('jadwals',$jadwals);
	}
	public function besok(){
		$today = date("w", time())-1;
		$tomorrow = ($today>=6?0:$today+1);
		$jadwals = Jadwal::whereRaw("HARI=?",array($tomorrow));

		return View::make('cbesok')->with('jadwals',$jadwals);
	
	}
	public function menu(){
		return View::make('cmenu');
	}
	public function getDosen(){
	
	$daftar = Dosen::all()->sortBy("DOSEN");
		return View::make('cdosen')->with('daftar',$daftar);
	}
	public function getMataKuliah(){
	
		$daftar = Matakuliah::all()->sortBy("MATA_KULIAH");
		return View::make('cmatakuliah')->with('daftar',$daftar);
	}
	public function getRuangan(){
		$daftar = Ruang::all()->sortBy("RUANG");
		return View::make('cruangan')->with('daftar',$daftar);
	}
	public function getHari(){
		return View::make('chari');
	}
	
	public function getDetail(){

		if (Input::has('kode_jadwal')) {

			$kode_jadwal = Input::get('kode_jadwal');

			$mk = Jadwal::where("ID_JADWAL","=",$kode_jadwal);

			if ($mk->count() == 1) {

				$hari = $mk->get()[0]->HARI;
				$arr_hari = array("SENIN", "SELASA", "RABU", "KAMIS", "JUMAT", "SABTU", "MINGGU");
				$str_hari = $arr_hari[$hari];

				$variables = array("NAMA_MK"=>$mk->get()[0]->matakuliah->MATA_KULIAH,
								   "KODE_MK"=>$mk->get()[0]->matakuliah->KODE,
								   "NAMA_DOSEN"=>$mk->get()[0]->dosen->DOSEN,
								   "KODE_DOSEN"=>$mk->get()[0]->dosen->KODE_DOSEN,
								   "RUANGAN"=>$mk->get()[0]->ruang->RUANG,
								   "ID_RUANG"=>$mk->get()[0]->ruang->ID_RUANG,
								   "KETERANGAN"=>$mk->get()[0]->KETERANGAN,
								   "JAM_MULAI"=>$mk->get()[0]->JAM_MULAI,
								   "JAM_AKHIR"=>$mk->get()[0]->JAM_AKHIR,
								   "JAM_AKHIR"=>$mk->get()[0]->JAM_AKHIR,
								   "HARI"=>$str_hari);

				return View::make('cdetail_jadwal', $variables);
			}

		}else if (Input::has('kode_dosen')) {

			$kode_dosen = Input::get('kode_dosen');

			$dosen = Dosen::where("KODE_DOSEN","=",$kode_dosen);

			if ($dosen->count() == 1) {

				$jadwals =array();
				$jadwals_count = array();

				for ($i = 0 ; $i < 7; $i++) {
					$jadwals[$i]= Jadwal::whereRaw("KODE_DOSEN = ? AND HARI = ?", array($kode_dosen, $i))->get()->sortBy("JAM_MULAI");
					$jadwals_count[$i] = count($jadwals[$i]);
				}

				$variables = array("NAMA_DOSEN"=>$dosen->get()[0]->DOSEN,
								   "KODE_DOSEN"=>$dosen->get()[0]->KODE_DOSEN,
								   "JADWALS"=>$jadwals,
								   "JADWALS_COUNT"=>$jadwals_count);

				// var_dump($jadwals);

				return View::make('cdetail_dosen', $variables);
			}

		}else if (Input::has('kode_mk')) {

			$kode_matakuliah = Input::get('kode_mk');

			$matakuliah = Matakuliah::where("KODE","=",$kode_matakuliah);

			if ($matakuliah->count() == 1) {

				$jadwals =array();
				$jadwals_count = array();

				for ($i = 0 ; $i < 7; $i++) {
					$jadwals[$i]= Jadwal::whereRaw("KODE = ? AND HARI = ?", array($kode_matakuliah, $i))->get()->sortBy("JAM_MULAI");
					$jadwals_count[$i] = count($jadwals[$i]);
				}

				$variables = array("MATAKULIAH"=>$matakuliah->get()[0]->MATA_KULIAH,
								   "KODE_MATAKULIAH"=>$matakuliah->get()[0]->KODE,
								   "JADWALS"=>$jadwals,
								   "JADWALS_COUNT"=>$jadwals_count);


				return View::make('cdetail_matakuliah', $variables);
			}

		}else if (Input::has('id_ruang')) {

			$id_ruang = Input::get('id_ruang');

			$ruangan = Ruang::where("ID_RUANG","=",$id_ruang);

			if ($ruangan->count() == 1) {

				$jadwals =array();
				$jadwals_count = array();

				for ($i = 0 ; $i < 7; $i++) {
					$jadwals[$i]= Jadwal::whereRaw("ID_RUANG = ? AND HARI = ?", array($id_ruang, $i))->get()->sortBy("JAM_MULAI");
					$jadwals_count[$i] = count($jadwals[$i]);
				}

				$variables = array("RUANGAN"=>$ruangan->get()[0]->RUANG,
								   "ID_RUANG"=>$ruangan->get()[0]->ID_RUANG,
								   "JADWALS"=>$jadwals,
								   "JADWALS_COUNT"=>$jadwals_count);


				return View::make('cdetail_ruang', $variables);
			}

		}else if (Input::has('hari')) {

			$hari = Input::get('hari');

			$jadwal = Jadwal::whereRaw("HARI=?",array($hari));

			if ($jadwal->count() > 0) {

				$variables = array("jadwals"=>$jadwal,
								   "HARI"=>$hari);


				return View::make('cdetail_hari', $variables);
			}

		}

		// return View::make('cdetail_jadwal');
	}

	public function getAbout(){
		return View::make('cabout');
	}
}