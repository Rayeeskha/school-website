@extends('frontend.layouts.app')
@section('page_title','Staff detail')
@section('meta_keywords','Staff detail')
@section('meta_description', 'Staff detail')
@section('container')
@include('frontend.pages.static.header', ['heading'=> Lang::get('front.course_details')])
<br><br>
<style type="text/css">
   .card {
   border: 1px solid #ddd;
   border-radius: 8px;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
   }
   .card-body {
   padding: 20px;
   }
   .card-title {
   font-size: 20px;
   color: #333;
   text-align: center;
   margin-bottom: 15px;
   }
   .card-body p {
   margin-bottom: 10px;
   }
   .card-body p strong {
   font-weight: bold;
   }
</style>
<div class="container-fluid" >
   <div class="row">
      @foreach($courses ?? [] as $course)
      <div class="col-md-3">
         <div class="card ">
            <div class="card-body">
               <div  class="rtl-text">
                  @php
                  $course_name = $course->course_name; 
                  $course_duration = $course->course_duration; 
                  $course_details = $course->course_details; 
                  if(session()->get('locale') == 'ur'){
                  $course_name = $course->course_name_ur; 
                  $course_duration = $course->course_duration_ur; 
                  $course_details = $course->course_details_ur; 
                  }
                  @endphp
                  <p><strong>@lang('front.course_name') : </strong> {{ @$course_name }}</p>
                  <p><strong>@lang('front.course_duration'): </strong>{{ @$course_duration }}</p>
                  <p><strong>@lang('front.course_details'): </strong>{{ @$course_details }} </p>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
<br><br>
@endsection