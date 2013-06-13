<?php

class ThreadTableSeeder extends Seeder{

	public function run(){

		$category = array(
				'PHP',
				'Javascript',
				'Java',
				'C',
				'Scala',
				'Spring',
				'phython',
				'ruby'
		);

		$title = array(

			'saving mysql using php',
			'backbone.js',
			'Swing package',
			'to C is to Believe',
			'Scala on Play framework',
			'RESTful API in spring mvc',
			'Django',
			'ruby rare steak'

		);

		foreach ($title as $key => $value) {
	
			$c[] = array(

				'title'=>$value,
				'category'=>$category[$key]

			);


		};

		foreach($c as $value){
			$thread = new Thread;
			$category = Category::whereName($value['category'])->first();


			$thread->title = $value['title'];
			$thread->slug = $value['title'];
			$thread->category = $category->id;
			$thread->save();
		}

		
	}

}