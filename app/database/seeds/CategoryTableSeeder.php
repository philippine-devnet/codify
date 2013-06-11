<?php

class CategoryTableSeeder extends Seeder{

	public function run(){

		DB::table('categories')->delete();

		$languages = array(
				'PHP',
				'Javascript',
				'Java',
				'C',
				'Scala',
				'Spring',
				'phython',
				'ruby'
		);

		$description = array(

			'server-side scripting language',
			'client-side scripting language',
			'All purpose language',
			'closest to machine language',
			'the heck is this',
			'java mvc framework for web dev',
			'snake!.. hissss',
			'pokemon!'

		);

		foreach ($languages as $key => $value) {
	
			$c[] = array(

				'name'=>$value,
				'desc'=>$description[$key]

			);


		};

		foreach($c as $value){
			$cat = new Category;
			$cat->name = $value['name'];
			$cat->description = $value['desc'];
			$cat->save();
		}


	}

}