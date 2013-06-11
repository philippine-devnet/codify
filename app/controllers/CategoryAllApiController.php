<?php
	class CategoryAllApiController extends BaseController{
		public function getAll(){
			$scope = array(array('id','!=','0'));
			return CategoryApi::pull($scope, e(Input::get('skip')), e(Input::get('take')));
		}
		public function missingMethod($parameters)
		{
		    //
		}
	}
