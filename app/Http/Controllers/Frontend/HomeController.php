<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Media;
use App\Models\Event;

class HomeController extends Controller
{
    public function __invoke(){
        return view('frontend.index');
    }
    public function website(){
        return view('frontend.index');
    }

    public function page($page){
    	return view('frontend.pages.static.'.$page);
    }

    public function staffDetail(){
    	$teachers = Teacher::wherestatus(1)->get();
    	return view('frontend.staff.details', compact('teachers'));
    }

    public function courseDetail(){
       $courses = Course::wherestatus(1)->get();
       return view('frontend.course.details', compact('courses')); 
    }

    public function gallary($type='', $val=''){
        $args = [];
        if (!empty($type) && !empty($val)) {
            $args += ['media_type' => $type, 'media'=> $val];
        }else{
            $args += ['media_type' => $type];
        }
        $args += ['status' => 1];
        $medias = Media::where($args)->get();
        return view('frontend.media.index', compact('medias'));
    }

    public function mediaDetail($id){
        $multiAttachment = [];
        $details = Media::whereid($id)->first();
        if (!empty($details->multi_attachment)) {
            $multiAttachment = json_decode($details->multi_attachment, true);
        }
        return view('frontend.media.media_details', compact('details', 'multiAttachment'));
    }

    public function event(){
        $events = Event::latest()->get();
        return view('frontend.media.event', compact('events'));
    }

}
