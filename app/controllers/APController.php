<?php
	class APController extends BaseController{
		public function getIndex(){}
		public function getLogout(){
			Auth::logout();
			return Redirect::to('AP');
		}
		public function __construct(){
        	$this->beforeFilter('admin-auth');
		}
	}
