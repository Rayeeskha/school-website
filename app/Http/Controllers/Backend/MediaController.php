<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\MediaRepository;
use Illuminate\Http\Request;
use App\Http\Requests\MediaRequest;

class MediaController extends Controller
{
	protected $mediaRepository;

	public function __construct(MediaRepository $mediaRepository) {
        $this->mediaRepository = $mediaRepository;
    }

    public function index(Request $request){
    	if ($request->ajax()) {
            return $this->mediaRepository->index();
        }
    	return view('backend.media.index');
    }

    public function store(MediaRequest $request){
        $input = $request->validated();
        try {
            $response = $this->mediaRepository->store($request->all());
            return response()->json(['success' => true,'message' => $response,'url'=>''],200);
        }catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


}
