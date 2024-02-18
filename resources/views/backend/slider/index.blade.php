<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Sliders</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Sliders</a></li>
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
               <h5 class="card-title mb-0">Slider List</h5>

               <a href="javascript:void(0)" class="btn btn-primary  addSlider" style="float: right"><span class="bx bx-plus"></span>&nbsp;Add Slider
                </a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                     <thead>
                        <tr>
                           <th data-ordering="false">SR No.</th>
                           <th>Image</th>
                           <th>Title English</th>
                           <th>Title Urdu</th>        
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

<div class="modal fade zoomIn sliderModal" id="sliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
     <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
           <h5 class="modal-title" id="exampleModalLabel"><span class="las la-user-plus"></span>&nbsp;</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form class="validateForm" action="" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="" class="slider_id">
           <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <label>Slider Title English</label>
                  <input type="text" name="name" class="form-control slider_name">

                  <span class="text-danger Errname"></span>
                </div>
                <div class="col-md-6">
                  <label>Slider Title Urdu</label>
                  <input type="text" name="name_ur" class="form-control name_ur" dir="rtl">
                  <span class="text-danger Errname_ur"></span>
                </div>

                <div class="col-md-12">
                  <label>Image</label>
                  <input type="file" name="image" class="form-control image">
                  <span class="text-danger Errimage"></span>
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
       ajax: "{{ route('admin.slider.index') }}",
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'image', name: 'image'},
         {data: 'name', name: 'name'},
         {data: 'name_ur', name: 'name_ur'},
         {data: 'status', name: 'status'},
         {data: 'created_at', name: 'created_at'},        
         {data: 'action', name: 'action'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-sliders');
        $(row).attr('row-slider_id',data.id);
        $(row).attr('row-slider_name',data.name);
        $(row).attr('row-slider_image',data.image);
        $(row).attr('row-name_ur',data.name_ur);
      }
    });
  });
</script>