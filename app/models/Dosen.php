<?php

class Dosen extends Eloquent{
	
	protected $table = "Dosens";

	public function jadwal(){
		return $this->belongsTo('Jadwal', 'KODE_DOSEN', 'KODE_DOSEN');
	}

}