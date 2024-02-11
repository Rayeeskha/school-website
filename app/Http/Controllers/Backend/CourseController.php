<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Backend\CourseRepository;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    protected $courseRepository;

	public function __construct(CourseRepository $courseRepository) {
        $this->courseRepository = $courseRepository;
    }

    public function index(Request $request){
    	if ($request->ajax()) {
            return $this->courseRepository->index();
        }
    	return view('backend.courses.index');
    }

    public function store(CourseRequest $request){
        $input = $request->validated();
        try {
            $response = $this->courseRepository->store($request->all());
            return response()->json(['success' => true,'message' => $response,'url'=>''],200);
        }catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


}
