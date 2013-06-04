<?php

class Category extends Eloquent{

	protected $table = 'Category';

	public function thread(){
		return $this->hasMany('Thread');
	}
	
}