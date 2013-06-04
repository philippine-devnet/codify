<?php

class Thread extends Eloquent{

	protected $table = 'Thread';

	public function category(){

		return $this->belongsTo('Category');
	
	}
	
}