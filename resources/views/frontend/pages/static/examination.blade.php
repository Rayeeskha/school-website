@extends('frontend.layouts.app')
@section('page_title','Gareeb Nawaz Markaz Examination')
@section('meta_keywords','Gareeb Nawaz Markaz Examination')
@section('meta_description', 'Gareeb Nawaz Markaz Examination')
@section('container')

@include('frontend.pages.static.header', ['heading'=> Lang::get('examination.EXAMINATION')])
<!-- Page layout -->
<div class="page-content mt-4">
	<div class="product-gallery rtl-card">
        <div class="container ">
        	<div class="row">
        		
				<div class="col-12">
					<div class="border-bottom pb-2 rtl-text">
						<h2 class="title mt-6 urdu-title">@lang('examination.heading')</h2>
						<p> 
							@lang('examination.exam_total')
						</p>
					</div>
				</div>
				<div class="col-12 rtl-text">
					<div class="border-bottom pb-2">
						<h2 class="title mt-6  urdu-title">@lang('examination.the_yer_of_str')</h2>
						<p> <span>@lang('examination.mid_term_mark')</span> <br/>@lang('examination.mid_term_mark')<br/><br/>
							 @lang('examination.marks_and')<br/>
						</p>
					</div>
				</div>
				
				<div class="col-12 rtl-text">
					<div class="border-bottom pb-2">
						<p>@lang('examination.exam_desc')</p>
					</div>
				</div>
				
			</div>
		</div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->


@endsection