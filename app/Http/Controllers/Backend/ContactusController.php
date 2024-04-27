<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Backend\CourseRepository;
use App\Http\Requests\CourseRequest;
use DataTables;
use App\Models\Contact;

class ContactusController extends Controller
{
	public function index(Request $request){
		if ($request->ajax()) {
            $data = Contact::select('*',\DB::raw('@rownum  := @rownum  + 1 AS DT_RowIndex'))->orderBy('id', 'DESC');
        	return Datatables::of($data)->addIndexColumn()
            	->editColumn('created_at', function($row){
                	return date('d M Y',strtotime($row->created_at));
			})->make(true);
        }    	
    	return view('backend.contactus.index');
    }
}