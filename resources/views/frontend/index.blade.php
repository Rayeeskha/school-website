@extends('frontend.layouts.app')
@section('page_title',Lang::get('front.ghareeb_nawaz'))
@section('meta_keywords',Lang::get('front.ghareeb_nawaz'))
@section('meta_description', Lang::get('front.ghareeb_nawaz'))
@section('container')

<!-- Slider -->
<div class="home-carousel"></div>
<!-- Home Contend -->
<div class="card rtl-card" >
	<div class="card-body"  >
		<div class="container-fluid" >
			<div class="row">
				<div class="col-md-4 col-sm-12 col-12 rtl-text">
					<h2  class="title mt-2 urdu-title title-1 mb-2">@lang('front.new_event')</h2>
					@foreach(CustomHelper::getNewEvent() ?? [] as $event)
					<div class="card mt-2" style="border:2px solid blue; border-radius:10px">
						<div class="card-body btn-card-body">
							<h5 class="card-title ext-white">{{ $event->title }}</h5>
							<img src="{{ asset('frontend/assets/new.jpeg') }}" width="40px" height="20px" class="card-new-icon" alt="">
							<p class="card-text text-dark">{{ $event->description }}</p>
							<a href="{{ asset($event->attachment) }}" download class="btn btn-success btn-card">@lang('front.download')</a>
						</div>
					</div>
					@endforeach

					@if(CustomHelper::totalEventCount() > 0)
						<a href="#!">@lang('front.read_more')</a>
					@endif
     		</div>
			<div class="col-md-8 col-sm-12 col-12 rtl-text para">
				<h2  class="title mt-2 urdu-title title-1 mb-2">@lang('intro.intro_title')</h2>
				<p class="para1"> @lang('intro.intro1') </p>
				<p class="para1"> @lang('intro.intro2') </p>
				<p class="para1">@lang('intro.intro3')</p>
				<p class="para1">@lang('intro.intro4')</p>
				<p class="para1">@lang('intro.intro5')</p>
			</div>
			</div> 
		</div>
		</div>		
	</div>
</div>
@endsection