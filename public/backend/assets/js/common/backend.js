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

// addStaff
$('.addStaff').click(function() {
  $('.text-danger').html('');
  $('.staff_id').val('');
  $('.image_show').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add Staff');
  $('.staffModal').modal({ backdrop: 'static', keyboard: false });
  $('.staffModal').modal('show');
});

//editStaff
$(document).on('click','.editStaff',function(){
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Staff');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.name').val(tr.attr('row-name'));
  $('.staff_id').val(tr.attr('row-staff_id'));
  $('.email').val(tr.attr('row-email'));
  $('.phone').val(tr.attr('row-phone'));
  $('.qualification').val(tr.attr('row-qualification'));
  $('.specility').val(tr.attr('row-specility'));
  $('.image_show').html(tr.attr('row-photo'));
  $('.staffModal').modal({ backdrop: 'static', keyboard: false });
  $('.staffModal').modal('show');
});

// addCourse
$('.addCourse').click(function() {
  $('.text-danger').html('');
  $('.course_id').val('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add Course');
  $('.courseModal').modal({ backdrop: 'static', keyboard: false });
  $('.courseModal').modal('show');
});

// editCourse
$(document).on('click','.editCourse',function(){
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Course');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.course_name').val(tr.attr('row-course_name'));
  $('.course_id').val(tr.attr('row-course_id'));
  $('.course_duration').val(tr.attr('row-course_duration'));
  $('.course_details').val(tr.attr('row-course_details'));
  $('.courseModal').modal({ backdrop: 'static', keyboard: false });
  $('.courseModal').modal('show');
});

// addMedia
$('.addMedia').click(function() {
  $('.text-danger').html('');
  $('.course_id').val('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add Media');
  $('.mediaModal').modal({ backdrop: 'static', keyboard: false });
  $('.mediaModal').modal('show');
});

// editMedia
$(document).on('click','.editMedia',function(){
  $('.text-danger').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Media');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.media_title').val(tr.attr('row-media_title'));
  $('.media_id').val(tr.attr('row-media_id'));
  $('.image_show').html(tr.attr('row-photo'));
  $('.mediaModal').modal({ backdrop: 'static', keyboard: false });
  $('.mediaModal').modal('show');
});