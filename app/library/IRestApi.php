<?php 

	class RestAPI{
		public static function className(){
			return current(explode("Api", get_called_class()));
			
		}

		//pulling data, getting data from the model, or retrieving them via an API
		public static function pull($scope = array(array('id','=','0')), $skip = NULL, $take = NULL){

			$class = self::className();
			$data = $class::where('id','!=','0');

			foreach( $scope as $s ){
				if( count($s) == 3 )
					$data->where($s[0], $s[1], $s[2]);
			}
			if( $skip !== NULL && $take !== NULL )
				return $data->skip($skip)->take($take)->get();
			else
				return $data->get();

		}

		public static function save($API_TYPE, $input){
			$class = get_called_class();
			switch($API_TYPE){
				case ApiTypes::$JSON:
					return $class::json($input);
					break;
				case ApiTypes::$SHORT_CODE:
					return $class::short_code($input);
					break;
				case ApiTypes::$LONG_CODE:
					return $class::long_code($input);
					break;
				case ApiTypes::$KEY:
					return $class::key($input);
					break;
			}
		}

		//pushing data
		public static function push(){}

		public static function boot(){
			return new self;
		}

	}

