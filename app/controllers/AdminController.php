<?php
	class AdminController extends BaseController{

		public function getIndex(){

		}
		public function __construct(){
        	$this->beforeFilter('admin-auth');
		}
	}
