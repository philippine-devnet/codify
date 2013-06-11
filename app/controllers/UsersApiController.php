<?php
	class UsersApiController extends BaseController{
		public function getAll($skip = 0, $take = 10){
			$scope = array(array('id','!=','0'));
			$skip = Input::get('skip') ? Input::get('skip') : $skip;
			$take = Input::get('take') ? Input::get('take') : $take;
			return UserApi::pull($scope, e($skip), e($take),array('id','desc'),array('Role','Profile'));
		}
		
		
	}
