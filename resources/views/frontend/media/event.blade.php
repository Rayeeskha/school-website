@extends('frontend.layouts.app')
@section('page_title',Lang::get('front.ghareeb_nawaz'). " ". Lang::get('front.new_event'))
@section('meta_keywords',Lang::get('front.ghareeb_nawaz'). " ". Lang::get('front.new_event'))
@section('meta_description', Lang::get('front.ghareeb_nawaz'). " ". Lang::get('front.new_event'))
@section('container')
@include('frontend.pages.static.header', ['heading'=> Lang::get('front.new_event')])
<div class="container-fluid">
<div class="card">
   <div class="card-body">
      <div class="row">
         @foreach($events ?? [] as $event)
         <div class="col-md-4 col-sm-12 col-12 rtl-card">
            <div class="card mt-2" style="border:2px solid blue; border-radius:10px;padding-top: 6px; height: 270px">
               <div class="card-body btn-card-body">
                  <h5 class="card-title ext-white">{{ Str::limit($event->title, 100) }}</h5>
                  <img src="{{ asset('frontend/assets/new1.jpeg') }}" width="40px" height="20px" class="card-new-icon {{ empty(session()->get('locale')) || session()->get('locale') == 'en' ? 'card-new-icon-1' :'card-new-icon-2' }}" alt="">
                  <p class="card-text text-dark">{{ $event->description }}</p>
                  <a href="{{ asset($event->attachment) }}" download class="btn btn-success btn-card">@lang('front.download')</a>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection