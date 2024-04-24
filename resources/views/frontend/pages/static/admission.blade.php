@extends('frontend.layouts.app')
@section('page_title',Lang::get('front.ghareeb_nawaz') . " ".Lang::get('admission.admission'))
@section('meta_keywords',Lang::get('front.ghareeb_nawaz') . " ".Lang::get('admission.admission'))
@section('meta_description', Lang::get('front.ghareeb_nawaz'). " ". Lang::get('admission.admission'))
@section('container')

@include('frontend.pages.static.header', ['heading'=> Lang::get('admission.admission')])

<!-- Page layout -->
<div class="page-content mt-4">
	<div class="product-gallery rtl-card">
        <div class="container ">
        	<div class="row">
        		
				<div class="col-12">
					<div class="border-bottom pb-1 rtl-text para">
						<h2 class="title title-1 mt-0 urdu-title">@lang('admission.admission')</h2>
						<p> 
							@lang('admission.title')
						</p>
					</div>
				</div>
				<div class="col-12 rtl-text">
					<div class="border-bottom pb-2 para">
						<h2 class="title title-1 mt-2  urdu-title">@lang('admission.exp_date')</h2>
						<p> <span>@lang('admission.first_test')</span> <br/>@lang('admission.second_test')<br/>
						</p>
						<h2 class="title title-1 mt-2  urdu-title">@lang('admission.ad_creteria')</h2>
						<p>@lang('admission.cnd_pass')</p>

						<h2 class="title title-1 mt-2  urdu-title">@lang('admission.doc_sbms')</h2>
						<p>@lang('admission.doc_title')</p>
					</div>
				</div>
				
			</div>
		</div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->



@endsection