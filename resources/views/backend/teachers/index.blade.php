<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Staff</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Staff</a></li>
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
               <h5 class="card-title mb-0">Staff List</h5>

               <a href="javascript:void(0)" class="btn btn-primary  addStaff" style="float: right"><span class="bx bx-plus"></span>&nbsp;Add Staff
                </a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                     <thead>
                        <tr>
                           <th data-ordering="false">SR No.</th>
                           <th>Image</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Qualification</th>
                           <th>Specility</th>
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

<div class="modal fade zoomIn staffModal" id="sliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
     <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
           <h5 class="modal-title" id="exampleModalLabel"><span class="las la-user-plus"></span>&nbsp;</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form class="validateForm" action="" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="" class="staff_id">
           <div class="modal-body">
              <div class="row">
                <div class="col-md-12">
                  <label>Staff Name</label>
                  <input type="text" name="name" class="form-control name">
                  <span class="text-danger Errname"></span>
                </div>
                <div class="col-md-12">
                  <label>Staff Email</label>
                  <input type="text" name="email" class="form-control email">
                  <span class="text-danger Erremail"></span>
                </div>
                <div class="col-md-12">
                  <label>Staff Phone</label>
                  <input type="number" name="phone" class="form-control phone">
                  <span class="text-danger Errphone"></span>
                </div>
                <div class="col-md-12">
                  <label>Staff Qualification</label>
                  <input type="text" name="qualification" class="form-control qualification">
                  <span class="text-danger Errqualification"></span>
                </div>
                <div class="col-md-12">
                  <label>Staff Specility</label>
                  <input type="text" name="specility" class="form-control specility">
                  <span class="text-danger Errspecility"></span>
                </div>

                <div class="col-md-12">
                  <label>Photo</label>
                  <input type="file" name="photo" class="form-control photo image">
                  <span class="text-danger Errphoto"></span>
                  <div class="preview_image_div" style="display: none;">
                    <img src="" class="preview_image image_responsive" style="width: 50px;height: 50px; border-radius: 50%;">
                 </div>
                 <div class="image_show"></div>
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
       ajax: "{{ route('admin.teacher.index') }}",
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'photo', name: 'photo'},
         {data: 'name', name: 'name'},
         {data: 'email', name: 'email'},
         {data: 'phone', name: 'phone'},
         {data: 'qualification', name: 'qualification'},
         {data: 'specility', name: 'specility'},
         {data: 'status', name: 'status'},
         {data: 'created_at', name: 'created_at'},        
         {data: 'action', name: 'action'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-teachers');
        $(row).attr('row-staff_id',data.id);
        $(row).attr('row-name',data.name);
        $(row).attr('row-email',data.email);
        $(row).attr('row-phone',data.phone);
        $(row).attr('row-photo',data.photo);
        $(row).attr('row-qualification',data.qualification);
        $(row).attr('row-specility',data.specility);
      }
    });
  });
</script>