<?php

class Jadwal extends Eloquent{
	
	public function dosen()
	{
		return $this->hasOne('Dosen', 'KODE_DOSEN', 'KODE_DOSEN');
	}

	public function matakuliah(){
		return $this->hasOne('Matakuliah','KODE', 'KODE');
	}

	public function ruang(){
		return $this->hasOne('Ruang', 'ID_RUANG', 'ID_RUANG');
	}

	public function kelas(){
		return $this->hasOne('Kelas', 'ID_KELAS', 'ID_KELAS');
	}	

}