//Add Slider
$('.addSlider').click(function() {
  $('.text-danger').html('');
  $('.slider_id').val('');
  $('.image_show').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add Slider');
  $('.sliderModal').modal({ backdrop: 'static', keyboard: false });
  $('.sliderModal').modal('show');
});

// Edit Slider
$(document).on('click','.editSlider',function(){
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Slider');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.slider_name').val(tr.attr('row-slider_name'));
  $('.slider_id').val(tr.attr('row-slider_id'));
  $('.image_show').html(tr.attr('row-slider_image'));
  $('.sliderModal').modal({ backdrop: 'static', keyboard: false });
  $('.sliderModal').modal('show');
});