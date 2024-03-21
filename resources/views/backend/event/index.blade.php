<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Event</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Event</a></li>
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
               <h5 class="card-title mb-0">Event List</h5>
               <a href="javascript:void(0)" class="btn btn-primary  addEvent" style="float: right"><span class="bx bx-plus"></span>&nbsp;Add Event
                </a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                     <thead>
                        <tr>
                           <th data-ordering="false">SR No.</th>
                           <th>Title En</th>
                           <th>Title Ur</th>
                           <th>Attachment</th>
                           <th>Decription En</th>
                           <th>Decription Ur</th> 
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
<div class="modal fade zoomIn eventModal" id="sliderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
     <div class="modal-content border-0">
        <div class="modal-header p-3 bg-soft-info">
           <h5 class="modal-title" id="exampleModalLabel"><span class="las la-user-plus"></span>&nbsp;</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
        </div>
        <form class="validateForm" action="{{ route('admin.event.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="" class="event_id">
           <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <label>Title English</label>
                  <input type="text" name="title" class="form-control title">
                  <span class="text-danger Errtitle"></span><br>
                </div>               
                <div class="col-md-6">
                  <label>Title Urdu</label>
                  <input type="text" name="title_ur" class="form-control title_ur" dir="rtl">
                  <span class="text-danger Errtitle_ur"></span><br>
                </div>
                <div class="col-lg-12">
                  <label>Attachment</label>
                  <input type="file" name="attachment" class="form-control">
                  <span class="text-danger Errattachment"></span>
                  <span class="Errdescription_ur"></span>
                </div>
                <div class="col-lg-12">
                  <label>Description English</label>
                  <textarea name="description" class="form-control description"></textarea>
                  <span class="Errdescription"></span>
                </div>
                <div class="col-lg-12">
                  <label>Description Urdu</label>
                  <textarea name="description_ur" class="form-control description_ur" dir="rtl"></textarea>
                  <span class="Errdescription_ur"></span>
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
       ajax: "{{ route('admin.event.index') }}",
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'title', name: 'title'},
         {data: 'title_ur', name: 'title_ur'},
         {data: 'attachment', name: 'attachment'},
         {data: 'description', name: 'description'},
         {data: 'description_ur', name: 'description_ur'},
         {data: 'status', name: 'status'},
         {data: 'created_at', name: 'created_at'},        
         {data: 'action', name: 'action'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-events');
        $(row).attr('row-event_id',data.id);
        $(row).attr('row-title',data.title);
        $(row).attr('row-title_ur',data.title_ur);
        $(row).attr('row-description',data.description);
        $(row).attr('row-description_ur',data.description_ur);
      }
    });
  });
</script>