<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Media</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Media</a></li>
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
               <h5 class="card-title mb-0">Media List</h5>
               <a href="javascript:void(0)" class="btn btn-primary  addMedia" style="float: right"><span class="bx bx-plus"></span>&nbsp;Add Media
                </a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                     <thead>
                        <tr>
                           <th data-ordering="false">SR No.</th>
                           <th>Title English</th>
                           <th>Title Urdu</th>
                           <th>Media</th>
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

<!-- Media Modal -->
<div class="modal fade zoomIn mediaModal" id="sliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
     <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
           <h5 class="modal-title" id="exampleModalLabel"><span class="las la-user-plus"></span>&nbsp;</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form class="validateForm" action="" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="" class="media_id">
           <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <label>Media Title English</label>
                  <input type="text" name="media_title" class="form-control media_title">
                  <span class="text-danger Errmedia_title"></span>
                </div>
                <div class="col-md-6">
                  <label>Media Title Urdu</label>
                  <input type="text" name="media_title_ur" class="form-control media_title_ur" dir="rtl">
                  <span class="text-danger Errmedia_title_ur"></span>
                </div>
                <div class="col-md-6">
                  <label>Media Description English</label>
                  <textarea name="media_desc" class="form-control media_desc"></textarea>
                  <span class="text-danger Errmedia_desc"></span>
                </div>
                <div class="col-md-6">
                  <label>Media Description Urdu</label>
                  <textarea name="media_desc_ur" class="form-control media_desc_ur" dir="rtl"></textarea>
                  <span class="text-danger Errmedia_desc_ur"></span>
                </div>
                <div class="col-md-6">
                  <label>Media Type</label>
                  <select name="media_type" class="form-control media_type_arr"></select>
                  <span class="text-danger Errmedia_type"></span>
                </div>
                <div class="col-md-6">
                  <label>Type</label>
                  <select name="media" class="form-control media"></select>
                  <span class="text-danger Errmedia"></span>
                </div>
                <div class="col-md-12">
                  <label>Media Photo</label>
                  <input type="file" name="photo" class="form-control image media_photo">
                  <span class="text-danger Errphoto"></span>
                  <div class="preview_image_div" style="display: none;">
                    <img src="" class="preview_image image_responsive" style="width: 50px;height: 50px; border-radius: 50%;">
                  </div>
                  <div class="image_show"></div>
                </div>
                <div class="col-lg-12 col-md-12 multipleImageDivBox" style="display: none;">
                  <label>Multiple Images/Videos/Audios</label>
                  <input type="file" class="form-control" name="multi_attachment[]" multiple>
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
       ajax: "{{ route('admin.media.index') }}",
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'media_title', name: 'media_title'},
         {data: 'media_title_ur', name: 'media_title_ur'},
         {data: 'photo', name: 'photo'},
         {data: 'status', name: 'status'},
         {data: 'created_at', name: 'created_at'},
         {data: 'action', name: 'action'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-media');
        $(row).attr('row-media_id',data.id);
        $(row).attr('row-media_title',data.media_title);
        $(row).attr('row-photo',data.photo);
        $(row).attr('row-media_desc',data.media_desc);
        $(row).attr('row-media_title_ur',data.media_title_ur);
        $(row).attr('row-media_desc_ur',data.media_desc_ur);
        $(row).attr('row-media_type',data.media_type);
        $(row).attr('row-media',data.media);
      }
    });
  });
</script>