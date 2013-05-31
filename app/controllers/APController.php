<?php
	class APController extends BaseController{
		public function getIndex(){
			return View::make('admin.index')->with( array('title'=>'Dashboard | Index','current'=>'index') );
		}
		public function getLogout(){
			Auth::logout();
			return Redirect::to('ap');
		}
		public function __construct(){
        	$this->beforeFilter('admin-auth');
		}
	}
