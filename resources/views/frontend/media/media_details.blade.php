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
      @foreach($multiAttachment ?? [] as $k => $media)
      <div class="col-md-3">
         <div class="card " style="height: 320px">
            <div class="card-body">
               @if($details->media_type == 'Image')
                  <img src="{{ asset($media) }}" style="height: 230px; width: 100%">
               @elseif($details->media_type == 'Audio')
                  <audio controls>
                    <source src="{{ asset($media) }}" type="audio/mpeg">
                  </audio> 
               @elseif($details->media_type == 'Video')
                  <video width="100%" height="230px" controls>
                    <source src="{{ asset($media) }}" type="video/mp4">
                  </video>
               @elseif($details->media_type == 'Literature')
                  <center>
                     <a href="{{ asset($media) }}" class="btn btn-primary" download>Download</a>
                  </center>
                  <p>{{ @$details->media }}</p>           
               @endif   
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
<br><br>
@endsection