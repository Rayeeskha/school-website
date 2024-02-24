@extends('frontend.layouts.app')
@section('page_title','Staff detail')
@section('meta_keywords','Staff detail')
@section('meta_description', 'Staff detail')
@section('container')
@include('frontend.pages.static.header', ['heading'=> Lang::get('front.media')])
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
      @foreach($medias ?? [] as $media)
      <div class="col-md-3">
         <div class="card " style="height: 270px">
            <div class="card-body">
              <img src="{{ asset($media->photo) }}" style="height: 230px; width: 100%">
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
<br><br>
@endsection