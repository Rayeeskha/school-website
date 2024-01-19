 
	<!-- Plugins JS File -->
	<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<!-- Main JS File -->
	<script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/superfish.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
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