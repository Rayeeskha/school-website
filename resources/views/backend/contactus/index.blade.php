<x-admin-layout>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Contact us</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contact us</a></li>
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
               <h5 class="card-title mb-0">Contact us List</h5>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                     <thead>
                        <tr>
                           <th data-ordering="false">SR No.</th>
                           <th>Contact type</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone</th> 
                           <th>Language</th>
                           <th>Message</th>
                           <th>created at</th>
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

</x-admin-layout> 

<script type="text/javascript">
  $(function () {
    let table = $('.yajra-datatable').DataTable({
       processing: true,
       serverSide: true,
       ajax: "{{ route('admin.contact-us.index') }}",
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'contact_type', name: 'contact_type'},
         {data: 'name', name: 'name'},
         {data: 'email', name: 'email'},
         {data: 'phone', name: 'phone'},
         {data: 'language', name: 'language'},
         {data: 'message', name: 'message'},
         {data: 'created_at', name: 'created_at'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-contacts');
      }
    });
  });
</script>