<?php 
namespace App\Helpers;
use DB;
use Auth;

class CustomHelper{
	static function media(){
		return [
			'Audio' => ['Weekly Q & A', 'Dars-e-Hadith', 'Hamd & Naat','Speeches'],
			'Literature' =>['Urdu', 'English'],
			'Events' =>['Urshe 1', 'Urshe 2'],
		];
	}
}