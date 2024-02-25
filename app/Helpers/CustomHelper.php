<?php 
namespace App\Helpers;
use DB;
use Auth;
use App\Models\Slider;

class CustomHelper{
	static function getSliderData(){
		$sliderData = Slider::where('status', 1)->get();
		$formattedData = $sliderData->map(function ($item) {
            return [
                'id' => $item->id,
                'src' => asset($item->image), 
            ];
        });
         return $formattedData->toJson();
	}




}