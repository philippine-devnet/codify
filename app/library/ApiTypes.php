<?php
	class ApiTypes{
		public static $JSON = 'json-type';
		public static $SHORT_CODE = 'short-code';
		public static $LONG_CODE = "long-code";
		public static $KEY = "w-key";


		public static function getTypes(){
			return array(
					'json-type'=>'JSON Array',
					'short-code'=>'Short Cut',
					'long-code'=> 'Saving Data w/ validation', // complete validation
					'w-key' =>"API w/ Key configuration for Plugins"
				);
		}
		public static function getType($TYPE = "json-type"){
			return self::getTypes()[$TYPE];
		}
	}

