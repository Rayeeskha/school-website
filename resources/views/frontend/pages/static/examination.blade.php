@extends('frontend.layouts.app')
@section('page_title',Lang::get('front.ghareeb_nawaz'). " ".Lang::get('examination.EXAMINATION'))
@section('meta_keywords',Lang::get('front.ghareeb_nawaz'). " ". Lang::get('examination.EXAMINATION'))
@section('meta_description', Lang::get('front.ghareeb_nawaz'). " ". Lang::get('examination.EXAMINATION'))
@section('container')

@include('frontend.pages.static.header', ['heading'=> Lang::get('examination.EXAMINATION')])
<!-- Page layout -->
<div class="page-content mt-4">
	<div class="product-gallery rtl-card">
        <div class="container ">
        	<div class="row">
        		
				<div class="col-12">
					<div class="border-bottom pb-1 rtl-text para">
						<h2 class="title title-1 mt-0 urdu-title">@lang('examination.heading')</h2>
						<p> 
							@lang('examination.exam_total')
						</p>
					</div>
				</div>
				<div class="col-12 rtl-text">
					<div class="border-bottom pb-2 para">
						<h2 class="title title-1 mt-2  urdu-title">@lang('examination.the_yer_of_str')</h2>
						<p> <span>@lang('examination.mid_term_mark')</span><br/>
							 @lang('examination.marks_and')<br/>
						</p>
					</div>
				</div>
				
				<div class="col-12 rtl-text">
					<div class="border-bottom pb-2 para">
						<p>@lang('examination.exam_desc')</p>
					</div>
				</div>
				
			</div>
		</div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->


@endsection