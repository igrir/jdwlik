<?php

class Kelas extends Eloquent{

	protected $table = "Kelas";

	public function jadwal(){
		return $this->belongsTo('Jadwal', 'ID_KELAS', 'ID_KELAS');
	}	
}