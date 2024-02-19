<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke(){
        return view('frontend.index1');
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

}
