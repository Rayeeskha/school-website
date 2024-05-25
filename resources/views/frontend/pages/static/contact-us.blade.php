@extends('frontend.layouts.app')
@section('page_title',Lang::get('front.ghareeb_nawaz') . " ".Lang::get('contactus.contactus'))
@section('meta_keywords',Lang::get('front.ghareeb_nawaz') . " ".Lang::get('contactus.contactus'))
@section('meta_description', Lang::get('front.ghareeb_nawaz'). " ". Lang::get('contactus.contactus'))
@section('container')

<style type="text/css">
	select.form-control:not([size]):not([multiple]) { height: 40px; }
	.form-control { padding: 0px 5px;}
</style>

@include('frontend.pages.static.header', ['heading'=> Lang::get('contactus.contactus')])

<div class="page-content mt-4">
<div class="product-gallery rtl-card">
<div class="container ">
<div class="row">
	<div class="col-md-5">
		<div class="card shadow">
			<div class="card-body">
				<h5>@lang('front.ghareeb_nawaz')</h5><hr>
				<p>@lang('front.Phone') : <a href="tel:9838239110">9838239110</a>, <a href="tel:9415673664">9415673664</a></p>
				<p> @lang('front.Email') : <a href="mailto:info@ghareebnawazmarkaz.com">info@ghareebnawazmarkaz.com</a></p>
				<p>@lang('front.Address'): @lang('front.Baidaula')</p>
				<hr>
				<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3549.0528056145026!2d82.65270617544897!3d27.186077076485258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDExJzA5LjkiTiA4MsKwMzknMTkuMCJF!5e0!3m2!1sen!2sin!4v1713989580351!5m2!1sen!2sin" width="100%" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
	<div class="col-md-7">
		<div class="card shadow">
			<div class="card-body">
				<h5>@lang('contactus.contactus')</h5><hr>
				<form action="{{ route('contact_us') }}" method="post" class="validateForm2">
					<div class="row">
						<div class="col-md-6">
							<label> @lang('front.Contact_type')</label>
							<select name="contact_type" class="form-control">
								<option> @lang('front.Markaz')</option>
								<option> @lang('front.Principle')</option>
							</select>
						</div>
						<div class="col-md-6">
							<label> @lang('front.Name')</label>
							<input type="text" name="name" class="form-control name" dir="{{ CustomHelper::currentLanguage() }}">
						</div>
						<div class="col-md-6">
							<label> @lang('front.Email')</label>
							<input type="text" name="email" class="form-control email" dir="{{ CustomHelper::currentLanguage() }}">
						</div>
						<div class="col-md-6">
							<label> @lang('front.Phone')</label>
							<input type="text" name="phone" class="form-control phone" dir="{{ CustomHelper::currentLanguage() }}">
						</div>
						<div class="col-md-12">
							<label> @lang('front.Message')</label>
							<textarea name="message" class="form-control message" dir="{{ CustomHelper::currentLanguage() }}"></textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-primary"> @lang('front.Submit')</button>
				</form>
			</div>
		</div>
	</div>

	

</div>
</div><!-- End .container -->
</div><!-- End .cart -->
</div><!-- End .page-content -->



@endsection