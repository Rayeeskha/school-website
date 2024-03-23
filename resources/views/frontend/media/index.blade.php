@extends('frontend.layouts.app')
@section('page_title',Lang::get('front.ghareeb_nawaz'). " ". Lang::get('front.media'))
@section('meta_keywords',Lang::get('front.ghareeb_nawaz'). " ". Lang::get('front.media'))
@section('meta_description', Lang::get('front.ghareeb_nawaz'). " ". Lang::get('front.media'))
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
         <a href="{{ route('media_detail', $media->id) }}">
            <div class="card " style="height: 320px">
               <div class="card-body">
                 <img src="{{ asset($media->photo) }}" style="height: 230px; width: 100%">
                 <p>{{ session()->get('lang') =='ur' ? $media->media_title_ur : $media->media_title }} <br>
                 </p>
               </div>
            </div>
         </a>
      </div>
      @endforeach
   </div>
</div>
<br><br>
@endsection