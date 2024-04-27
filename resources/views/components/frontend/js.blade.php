	<!-- Plugins JS File -->
	<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!-- Main JS File -->
	<script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/superfish.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/theme.js') }}"></script>

	<script src="{{ asset('backend/assets/js/common/validation.js') }}"></script> 
    <script src="{{ asset('backend/assets/js/common/validate.min.js') }}"></script> 

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Toaster Js Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script>let ajax = '{{ url('/') }}'</script>
    <!-- Custom js -->
    <script src="{{ asset('backend/assets/js/common/common_setup.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#show-footer').click(function(){
				$('.desktop-show').css('display','flex');
				$('#hide-footer').css('display','block');
				$(this).css('display','none');
			});
			$('#hide-footer').click(function(){
				$('.desktop-show').css('display','none');
				$('#show-footer').css('display','block');
				$(this).css('display','none');
			});
		})
	</script>
</body>

</html>