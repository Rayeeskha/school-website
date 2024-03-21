<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Backend\EventReposity;
use App\Http\Requests\EventRequest;

class EventController extends Controller
{
	protected $eventReposity;

	public function __construct(EventReposity $eventReposity) {
        $this->eventReposity = $eventReposity;
    }

    public function index(Request $request){
    	if ($request->ajax()) {
            return $this->eventReposity->index();
        }
    	return view('backend.event.index');
    }

    public function store(EventRequest $request){
    	$input = $request->validated();
        try {
            $response = $this->eventReposity->store($request->all());
            return response()->json(['success' => true,'message' => $response,'url'=>''],200);
        }catch (\Throwable $e)  {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


}
