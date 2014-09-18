<?php

class Kelas extends Eloquent{
	public function jadwal(){
		return $this->belongsTo('Jadwal', 'ID_KELAS', 'ID_KELAS');
	}	
}