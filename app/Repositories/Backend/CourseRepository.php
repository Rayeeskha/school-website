<?php

namespace App\Repositories\Backend;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Auth;
use DataTables;
use App\Models\Course;
use Str;
use DB;

class CourseRepository extends BaseRepository
{
	public function model()
    {
    	return Course::class;
    }

    public function index(){
        $data = Course::select('*',\DB::raw('@rownum  := @rownum  + 1 AS DT_RowIndex'))->orderBy('id', 'DESC');
        return Datatables::of($data)->addIndexColumn()
            ->addColumn('action', function($row){
                $btn = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="edit btn btn-info btn-md editCourse"><span class=" bx bx-edit text-white"></span></a>'; 
                $btn .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="delete btn btn-danger btn-md deleteDataTableRow"><span class=" bx bx-trash text-white"></span></a>'; 
                return $btn; 
            })->editColumn('created_at', function($row){
                return date('d M Y',strtotime($row->created_at));
			})->editColumn('status', function($row){
                $active = $row->status == '1' ? "checked" : '';
                $x = ($active) ? " switch3-checked " : " ";
                return '<div class="form-check form-switch form-switch-right form-switch-md">
                    <label for="rounded-button" class="form-label text-muted '.$x.' "></label>
                    <input class="form-check-input code-switcher status_change_datatable" type="checkbox" id="rounded-button" '.$active.'>
                </div>';    
            })->rawColumns(['status','action'])->make(true);
    }

    public function store($data){
        $id = @$data['id'];        
        Course::updateOrCreate(['id' => $id], $data);
        return $id > 0 ? 'Updated Sucessfully' : 'Added Sucessfully';
    }

}