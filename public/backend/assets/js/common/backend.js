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
  $('.image_show').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Slider');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.slider_name').val(tr.attr('row-slider_name'));
  $('.slider_id').val(tr.attr('row-slider_id'));
  $('.name_ur').val(tr.attr('row-name_ur'));
  $('.image_show').html(tr.attr('row-slider_image'));
  $('.sliderModal').modal({ backdrop: 'static', keyboard: false });
  $('.sliderModal').modal('show');
});

// addStaff
$('.addStaff').click(function() {
  $('.text-danger').html('');
  $('.image_show').html('');
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
  $('.image_show').html('');
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
  $('.name_ur').val(tr.attr('row-name_ur'));
  $('.qualification_ur').val(tr.attr('row-qualification_ur'));
  $('.specility_ur').val(tr.attr('row-specility_ur'));
  $('.serving_to_inst').val(tr.attr('row-serving_to_inst'));
  $('.serving_to_inst_ur').val(tr.attr('row-serving_to_inst_ur'));
  $('.education_detail').val(tr.attr('row-education_detail'));
  $('.education_detail_ur').val(tr.attr('row-education_detail_ur'));
  $('.image_show').html(tr.attr('row-photo'));
  $('.staffModal').modal({ backdrop: 'static', keyboard: false });
  $('.staffModal').modal('show');
});

// addCourse
$('.addCourse').click(function() {
  $('.text-danger').html('');
  $('.image_show').html('');
  $('.course_id').val('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Add Course');
  $('.courseModal').modal({ backdrop: 'static', keyboard: false });
  $('.courseModal').modal('show');
});

// editCourse
$(document).on('click','.editCourse',function(){
  $('.text-danger').html('');
  $('.image_show').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Course');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.course_name').val(tr.attr('row-course_name'));
  $('.course_id').val(tr.attr('row-course_id'));
  $('.course_duration').val(tr.attr('row-course_duration'));
  $('.course_details').val(tr.attr('row-course_details'));
  $('.course_name_ur').val(tr.attr('row-course_name_ur'));
  $('.course_duration_ur').val(tr.attr('row-course_duration_ur'));
  $('.course_details_ur').val(tr.attr('row-course_details_ur'));
  $('.courseModal').modal({ backdrop: 'static', keyboard: false });
  $('.courseModal').modal('show');
});

// addMedia
$('.addMedia').click(function() {
  $('.text-danger').html('');
  $('.course_id').val('');
  $('.image_show').html('');
  $('.media').html('');
  $('.validateForm')[0].reset();
  mediaCategory();
  $('.modal-title').html('Add Media');
  $('.mediaModal').modal({ backdrop: 'static', keyboard: false });
  $('.mediaModal').modal('show');
});

// editMedia
$(document).on('click','.editMedia',function(){
  $('.text-danger').html('');
  $('.image_show').html('');
  $('.validateForm')[0].reset();
  $('.modal-title').html('Edit Media');
  let selector = $(this);
  let tr  = selector.closest('tr'); 
  $('.media_title').val(tr.attr('row-media_title'));
  $('.media_id').val(tr.attr('row-media_id'));
  $('.media_desc').val(tr.attr('row-media_desc'));
  $('.media_title_ur').val(tr.attr('row-media_title_ur'));
  $('.media_desc_ur').val(tr.attr('row-media_desc_ur'));
  mediaCategory(tr.attr('row-media_type'));

  let val = tr.attr('row-media_type'); 
  if (val == 'Audio') {
    audio(tr.attr('row-media'));
  }else if(val=='Literature'){
    literature(tr.attr('row-media'));
  }else if(val=='Events'){
    events(tr.attr('row-media'));
  }
  $('.image_show').html(tr.attr('row-photo'));
  $('.mediaModal').modal({ backdrop: 'static', keyboard: false });
  $('.mediaModal').modal('show');
});

// media_type_arr
$(document).on('change','.media_type_arr',function(){
  let val = $(this).val();
  if (val == 'Audio') {
    audio();
  }else if(val=='Literature'){
    literature();
  }else if(val=='Events'){
    events();
  }
});

function literature(media=''){
  let types = ['Urdu', 'English'];
  let options = '<option>Select One</option>';  
  $.each(types, function(index, type) {
    let selected = '';
    if (media === type) {
      selected = 'selected';
    }
    options += '<option value="' + type + '" ' + selected + '>' + type + '</option>';
  });
  $('.media').html(options);
}

function events(media=''){
  let types = ['Urshe 1', 'Urshe 2'];
  let options = '<option>Select One</option>';  
  $.each(types, function(index, type) {
    let selected = '';
    if (media === type) {
      selected = 'selected';
    }
    options += '<option value="' + type + '" ' + selected + '>' + type + '</option>';
  });
  $('.media').html(options);
}



function audio(media=''){
  let types = ['Weekly Q & A', 'Dars-e-Hadith', 'Hamd & Naat','Speeches'];
  let options = '<option>Select One</option>';  
  $.each(types, function(index, type) {
    let selected = '';
    if (media === type) {
      selected = 'selected';
    }
    options += '<option value="' + type + '" ' + selected + '>' + type + '</option>';
  });
  $('.media').html(options);
}

function mediaCategory(mediaType='') {
  let types = ['Image', 'Audio', 'Video','Literature','Events'];
  let options = '<option>Select One</option>';
  
  $.each(types, function(index, type) {
    let selected = '';
    if (mediaType === type) {
      selected = 'selected';
    }
    options += '<option value="' + type + '" ' + selected + '>' + type + '</option>';
  });
  $('.media_type_arr').html(options);
}
