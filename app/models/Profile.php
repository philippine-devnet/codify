<?php
	class Profile extends Eloquent{
		protected $hidden = array('user_id');

		public function user(){
			return $this->belongsTo('User');
		}
	}
