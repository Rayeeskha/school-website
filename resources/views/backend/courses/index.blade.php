<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">course</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">course</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Blog table -->
<div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-header">
               <h5 class="card-title mb-0">course List</h5>
               <a href="javascript:void(0)" class="btn btn-primary  addCourse" style="float: right"><span class="bx bx-plus"></span>&nbsp;Add course
                </a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                     <thead>
                        <tr>
                           <th data-ordering="false">SR No.</th>
                           <th>Course Name En</th>
                           <th>Course Name Ur</th>
                           <th>Course duration En</th>
                           <th>Course details En</th> 
                           <th>Status</th>
                           <th>created at</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody></tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!--end col-->
   </div>

<!-- Blog Modal -->

<div class="modal fade zoomIn courseModal" id="sliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
     <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
           <h5 class="modal-title" id="exampleModalLabel"><span class="las la-user-plus"></span>&nbsp;</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form class="validateForm" action="" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="" class="course_id">
           <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <label>Course Name English</label>
                  <input type="text" name="course_name" class="form-control course_name">
                  <span class="text-danger Errcourse_name"></span><br>
                  <label>Course Duration English</label>
                  <input type="text" name="course_duration" class="form-control course_duration">
                  <span class="text-danger Errcourse_duration"></span><br>

                  <label>Course Details English</label>
                  <textarea class="form-control course_details" name="course_details"> </textarea>
                  <span class="text-danger Errcourse_details"></span><br>
                </div>               
                <div class="col-md-6">
                  <label>Course Name Urdu</label>
                  <input type="text" name="course_name_ur" class="form-control course_name_ur" dir="rtl">
                  <span class="text-danger Errcourse_name_ur"></span><br>

                  <label>Course Duration Urdu</label>
                  <input type="text" name="course_duration_ur" class="form-control course_duration_ur" dir="rtl">
                  <span class="text-danger Errcourse_duration_ur"></span><br>

                  <label>Course Details Urdu</label>
                  <textarea class="form-control course_details_ur" name="course_details_ur" dir="rtl"> </textarea>
                  <span class="text-danger Errcourse_details_ur"></span><br>
                </div>
              </div>
           </div>
           <div class="modal-footer">
              <div class="hstack gap-2 justify-content-end">
                <x-backend.preloader />
                <button type="button" class="btn btn-light" id="close-modal" data-bs-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-success" id="add-btn"><span class=" las la-plus-circle"></span>&nbsp;Submit</button>
              </div>
           </div>
        </form>
     </div>
  </div>
</div>


</x-admin-layout> 

<script type="text/javascript">
  $(function () {
    let table = $('.yajra-datatable').DataTable({
       processing: true,
       serverSide: true,
       ajax: "{{ route('admin.course.index') }}",
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'course_name', name: 'course_name'},
         {data: 'course_name_ur', name: 'course_name_ur'},
         {data: 'course_duration', name: 'course_duration'},
         {data: 'course_details', name: 'course_details'},
         {data: 'status', name: 'status'},
         {data: 'created_at', name: 'created_at'},        
         {data: 'action', name: 'action'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-courses');
        $(row).attr('row-course_id',data.id);
        $(row).attr('row-course_name',data.course_name);
        $(row).attr('row-course_duration',data.course_duration);
        $(row).attr('row-course_details',data.course_details);
        $(row).attr('row-course_name_ur',data.course_name_ur);
        $(row).attr('row-course_duration_ur',data.course_duration_ur);
        $(row).attr('row-course_details_ur',data.course_details_ur);
      }
    });
  });
</script>