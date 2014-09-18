<?php

class Dosen extends Eloquent{
	
	public function jadwal(){
		return $this->belongsTo('Jadwal', 'KODE_DOSEN', 'KODE_DOSEN');
	}

}