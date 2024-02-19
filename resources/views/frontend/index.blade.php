@extends('frontend.layouts.app')
@section('page_title','Gareeb Nawaz Markaz')
@section('meta_keywords','Gareeb Nawaz Markaz')
@section('meta_description', 'Gareeb Nawaz Markaz')
@section('container')
<!-- Slider -->
<div class="home-carousel"></div>
<!-- Home Contend -->
<div class="card">
	<div class="card-body">
		<div class="container">
			<div class="row">
			<div class="col-md-12 col-12">
				<h2 class="title mt-6">@lang('intro.intro_title')</h2>
				<p> @lang('intro.intro1') </p>
				<p> @lang('intro.intro2') </p>
				<p>@lang('intro.intro3')</p>
				<p>@lang('intro.intro4')</p>
				<p>@lang('intro.intro5')</p>
			</div>
			<!-- <div class="col-md-3 col-12">
				<figure class="product-gallery-image">
					<img src="{{ asset('frontend/assets/logo/logo.jpg') }}" alt="who we are image">
				</figure> End .product-gallery-image -->
			</div> 
		</div>
		</div>		
	</div>
</div>
@endsection