<?php 
namespace App\Helpers;
use DB;
use Auth;
use App\Models\Slider;
use App\Models\Event;

class CustomHelper{
	static function getSliderData(){
		$sliderData = Slider::where('status', 1)->orderBy('id', 'DESC')->limit(9)->get();
		$formattedData = $sliderData->map(function ($item) {
            return [
                'id' => $item->id,
                'src' => asset($item->image), 
            ];
        });
        return $formattedData->toJson();
	}

    static function getNewEvent(){
        return Event::wherestatus(1)->latest()->take(4)->get();
    }

    static function totalEventCount(){
       return Event::wherestatus(1)->count(); 
    }

    static function currentLanguage(){
        return empty(session()->get('locale')) || session()->get('locale') == 'ur' ? 'rtl' : 'ltr';
    }



}