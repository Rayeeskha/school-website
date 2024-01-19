<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\SliderRepository;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;

class SliderController extends Controller
{
	protected $sliderRepository;

	public function __construct(SliderRepository $sliderRepository) {
        $this->sliderRepository = $sliderRepository;
    }

    public function index(Request $request){
    	if ($request->ajax()) {
            return $this->sliderRepository->index();
        }
    	return view('backend.slider.index');
    }

    public function store(SliderRequest $request){
    	$input = $request->validated();
    	try {
    		$response = $this->sliderRepository->store($request->all());
    		
    		return response()->json(['success' => true,'message' => $response,'url'=>''],200);
    		
    	}catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
