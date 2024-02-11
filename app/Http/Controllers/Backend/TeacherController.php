<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Backend\TeacherRepository;
use App\Http\Requests\StaffRequest;

class TeacherController extends Controller
{
	protected $teacherRepository;

	public function __construct(TeacherRepository $teacherRepository) {
        $this->teacherRepository = $teacherRepository;
    }

    public function index(Request $request){
    	if ($request->ajax()) {
            return $this->teacherRepository->index();
        }
    	return view('backend.teachers.index');
    }

    public function store(StaffRequest $request){
        $input = $request->validated();
        try {
            $response = $this->teacherRepository->store($request->all());
            return response()->json(['success' => true,'message' => $response,'url'=>''],200);
        }catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
