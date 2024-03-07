@extends('frontend.layouts.app')
@section('page_title','Staff detail')
@section('meta_keywords','Staff detail')
@section('meta_description', 'Staff detail')
@section('container')
@include('frontend.pages.static.header', ['heading'=> Lang::get('front.staff_details')])
<br><br>
<style>
   .teacher-card {
   border: 2px solid #ccc;
   border-radius: 20px;
   overflow: hidden;
   margin-bottom: 20px;
   box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
   transition: transform 0.3s ease;
   }
   .teacher-card:hover {
   transform: translateY(-5px);
   }
   .teacher-card .card-img-top {
   height: 180px;
   object-fit: cover;
   border-bottom: 1px solid #ddd;
   }
   .teacher-card .card-body {
   padding: 10px;
   }
   .teacher-card h5.card-title {
   margin-bottom: 5px;
   font-size: 18px;
   color: #333;
   }
   .teacher-card p.card-text {
   margin-bottom: 0;
   font-size: 14px;
   color: #000000;
   }
   .teacher-contact-info {
   display: flex;
   align-items: center;
   margin-bottom: 10px;
   }
   .teacher-contact-info img {
   margin-right: 10px;
   width: 20px;
   height: 20px;
   }
   @media (max-width: 767.98px) {
   .teacher-card .card-img-top {
   height: 150px;
   }
   }
   .span1{
   line-height: 32px;
   }
   .urdu-text{
   font-size:18px;
   }
</style>
<div class="container-fluid rtl-card">
   <div class="row">
      @foreach($teachers ?? [] as $teacher)
      <div class="col-lg-3 col-md-4 col-sm-6">
         <div class="teacher-card">
            <img src="{{ asset($teacher->photo) }}" class="card-img-top" alt="teacher-photo" style="width: 100%; height: 250px; object-position: top;">
            @php
            $dir = "ltr";
            $name = $teacher->name;
            if(session()->get('locale') == 'ur'){
            $name = $teacher->name_ur;
            $dir = "rtl";
            }
            @endphp
            <div class="card-body " dir="{{ $dir }}" style="height:auto">
               <h5 class="card-title rtl-text">
                  <div class="row">
                     <div class="col-12">
                        <strong>@lang('front.name'):</strong> <span class="urdu-text"> {{ $name }}</span>
                     </div>
                     <div class="col-md-6">
                        <span class="teacher-contact-info" style="padding-top:5px; " >
                        <img src="frontend/assets/images/phone2.png" class="plogo" alt="phone-icon" > 
                        <span class="mn">
                           {{ $teacher->phone }} <span> 
                           </span>
                     </div>
                     <div class="col-md-12" style="border-top:1px solid silver; padding-top: 5px;>
                        <span class="span1" style="font-weight:700">@if(session()->get('locale') == 'ur')
                     <span class="uu">  {{ Str::limit($teacher->serving_to_inst_ur, 40) }}<br></span>
                     <span class="span1">{{ Str::limit($teacher->education_detail_ur, 60) }}</span>
                     @else
                     <span class="span1 span4">{{ Str::limit($teacher->serving_to_inst,40) }}</span><br> <span class="span1">{{ Str::limit($teacher->education_detail, 60) }}</span>
                     @endif
                     </span> 
                     </div>
                  </div>
               </h5>
               <p class="card-text rtl-text" style="border-top: 1px solid silver"> 
                  @php
                  $qalification = $teacher->qualification;
                  $specility = $teacher->specility;
                  if(session()->get('locale') == 'ur'){
                  $qalification = $teacher->qualification_ur;
                  $specility = $teacher->specility_ur;
                  }
                  @endphp
               <div class="row">
                  <div class="col-6 quali-spe" >
                     <div class="quali-spe1" >@lang('front.Qualification'): </div>
                     <span class="urdu-text quali-spe2 ">{{ $qalification }}</span>
                  </div>
                  <div class="col-6 quali-spe">
                     <div class="quali-spe1">@lang('front.Speciality'):</div>
                     <span class="urdu-text strng1 quali-spe2 ">{{ $specility }}</span>
                  </div>
               </div>
               </p>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection 