	<footer class="footer footer-2">
		<div class="footer-middle">
			<div class="container">
			    <div class="row mobile-show">
			        <div class="col-12">
			            <button id="show-footer" title="Show Footer"><i class="icon-arrow-down"></i></button>
                        <button id="hide-footer" title="Hide Footer"><i class="icon-arrow-up"></i></button>
			        </div>
			    </div>
				<div class="row desktop-show">
					<div class="col-sm-12 col-lg-4 col-12">
						<div class="widget widget-about">
							<img src="{{ asset('frontend/assets/logo/logo.jpg') }}" class="footer-logo" alt="Footer Logo"
								width="82" height="25">
							<p><img src="{{ asset('frontend/assets/images/location2.png') }}" > @lang('front.Baidaula') </p>
							<p><img src="{{ asset('frontend/assets/images/phone2.png') }}" > +919838239110</p>
							<p><a href="mailto:info@ghareebnawazmarkaz.com"><img src="{{ asset('frontend/assets/images/email2.png') }}" > info@ghareebnawazmarkaz.com</a></p>
							<div class="social-icons social-icons-color">
								
								<a href="#" class="social-icon" target="_blank" title="Facebook"><img src="{{ asset('frontend/assets/images/fb.svg') }}"  class="icon-facebook-f"></a>
                				<a href="#" class="social-icon" target="_blank" title="Instagram"><img src="{{ asset('frontend/assets/images/insta.svg') }}" class="instagram"></a>
                				<a href="#" class="social-icon" target="_blank" title="Youtube"><img src="{{ asset('frontend/assets/images/youtube.svg') }}" class="youtube"></a>
                				<a href="#" class="social-icon" target="_blank" title="Twitter"><img src="{{ asset('frontend/assets/images/tw.svg') }}"  class="icon-twitter"></a>
							</div><!-- End .soial-icons -->
						</div><!-- End .widget about-widget -->
					</div><!-- End .col-sm-12 col-lg-3 -->

					<div class="col-sm-4 col-lg-2 col-6">
						<div class="widget">
							<h4 class="widget-title  urdu-title">@lang('front.help_nd_info') </h4><!-- End .widget-title -->

							<ul class="widget-list">
								<li><a href="#!">@lang('front.about_us') </a></li>
								<!-- <li><a href="#!"> @lang('front.privacy_policy') </a></li> -->
								<li><a href="#!">@lang('front.aims_nd_obj') </a></li>
							</ul><!-- End .widget-list -->
						</div><!-- End .widget -->
					</div><!-- End .col-sm-4 col-lg-3 -->

					<div class="col-sm-4 col-lg-2 col-6">
						<div class="widget">
							<h4 class="widget-title"> 
								<!-- @lang('front.Introduction') -->
							</h4><!-- End .widget-title -->
						</div><!-- End .widget -->
					</div><!-- End .col-sm-4 col-lg-3 -->

					<div class="col-sm-4 col-lg-2 col-6">
						<div class="widget">
							<h4 class="widget-title"> @lang('front.Services')</h4><!-- End .widget-title -->

							<ul class="widget-list">
								<li><a href="#!">@lang('front.q_nd_library') </a></li>
								<!-- <li><a href="#!">@lang('front.Markazi_dar_al_Ifta')</a></li>
								<li><a href="#!">@lang('front.qadri') </a></li> -->
								
							</ul><!-- End .widget-list -->
						</div><!-- End .widget -->
					</div><!-- End .col-sm-64 col-lg-3 -->
					<div class="col-sm-4 col-lg-2 col-6">
						<div class="widget">
							<h4 class="widget-title">@lang('front.Download')</h4><!-- End .widget-title -->
							<p>
								<img src="{{ asset('frontend/assets/images/ft1.png') }}" class="apps">
								
							</p>
						</div><!-- End .widget -->
					</div><!-- End .col-sm-64 col-lg-3 -->
				</div><!-- End .row -->
			</div><!-- End .container -->
		</div><!-- End .footer-middle -->

		<div class="footer-bottom">
			<div class="container">
				<p class="footer-copyright">© 2024 Darul Uloom Ahl-e-Sunnat Gharib Nawaz Markaz. All Rights Reserved. By <a href="https://digisoftron.com/" target="_blank">Digi Softron Technology</a></p>
				<!-- End .footer-copyright -->
				<figure class="footer-payments">
					<img src="{{ asset('frontend/assets/images/card1.svg') }}" alt="Payment methods" height="20">
					<img src="{{ asset('frontend/assets/images/card2.svg') }}" alt="Payment methods" height="20">
					<img src="{{ asset('frontend/assets/images/card3.svg') }}" alt="Payment methods" height="20">
					
				</figure>

			</div><!-- End .container -->
		</div><!-- End .footer-bottom -->
	</footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
	<div class="mobile-menu-wrapper">
		<span class="mobile-menu-close"><i class="icon-close"></i></span>

		<nav class="mobile-nav">
			<ul class="mobile-menu">
				<li class="active">
					<a href="/">@lang('front.Home')</a>
				</li>

				<li>
					<a href="#!" class="sf-with-ul">
						@lang('front.examination')
						<!-- @lang('front.Introduction') -->
					</a>
					<ul>
						<li>
							<a href="#!" class="sf-with-ul">@lang('front.aims_nd_obj')</a>
						</li>
						<li><a href="#!">@lang('front.section_nd_branch')</a></li>
					</ul>
				</li>
				<li>
					<a href="#!" class="sf-with-ul">
						@lang('academic.academic')
					</a>
					<ul class="nav-style">
						<li>
							<a href="{{ route('page', 'academic') }}">@lang('academic.academic') </a>
						</li>
						<li>

							<a href="{{ route('page', 'admission') }}">@lang('front.admission')</a></li>
						<li>
							<a href="{{ route('staff_details') }}" >@lang('front.staff_details')</a>
						</li>
						
						<li>
							<a href="{{ route('course_detail') }}" >@lang('front.course_detail')
							</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#!" class="sf-with-ul">@lang('front.media')</a>
					<ul class="nav-style">
									<li><a href="#!" class="sf-with-ul">@lang('front.audio')</a>
										<ul>
											<li><a href="#!">@lang('front.weekly_q_a')</a></li>
											<li><a href="#!">@lang('front.dars_e_hadith')</a></li>
											<li><a href="#!">@lang('front.hamd_nd_naat')</a></li>
											<li><a href="#!">@lang('front.Speeches')</a></li>
										</ul>
									</li>

									<li><a href="#!" class="sf-with-ul">@lang('front.Literature')</a>
										<ul>
											
											<li><a href="#!">@lang('front.Urdu')</a></li>
											<li><a href="#!">@lang('front.English')</a></li>
										</ul>
									</li>
									<li>
										<a href="{{ route('gallary','Image') }}">@lang('front.img_nd_galary')</a>
									</li>
									<li><a href="#!" >@lang('front.Events')</a>
									</li>
										<!-- <ul>
											<li><a href="#!">@lang('front.Urshe1')</a></li>
											<li><a href="#!">@lang('front.Urshe2')</a></li>
										</ul> -->
									
								</ul>
				</li>
				<li>
					<a href="#!" class="sf-with-ul">@lang('front.Services')</a>

					<ul class="nav-style">
						<li><a href="#!">@lang('front.q_nd_library')</a></li>
						<li><a href="#!">@lang('front.Markazi_dar_al_Ifta') </a></li>
						<li><a href="#!">@lang('front.qadri')</a></li>
					</ul>

				</li>
				<li>
					<a href="#!">@lang('front.Live')</a>
					<ul  class="nav-style">
						<li><a href="#!">@lang('front.weekly_q_a')</a></li>
						<li><a href="#!">@lang('front.dars_e_hadith')</a></li>
					</ul>
				</li>
				<li>
					<a href="#!">@lang('front.Donation')</a>
					<ul class="nav-style">
						<li>
							<a href="#!">@lang('front.online_donation')</a>
						</li>
						<li>
							<a href="#!">@lang('front.Kifalat')</a>
						</li>
						<li>
							<a href="#!">@lang('front.bnk_deposit')</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="{{ route('page', 'contact-us') }}">@lang('front.contact_us')</a>
					<ul class="nav-style">
						<li>
							<a href="#!">@lang('front.@lang('front.markaz_ghareeb')</a>
						</li>
						<li>
							<a href="#!">@lang('front.the_principle')</a>
						</li>
						<li>
							<a href="#!">@lang('front.Donations')</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</nav><!-- End .mobile-nav -->

		<div class="social-icons">
			<a href="#" class="social-icon" target="_blank" title="Facebook"><img src="{{asset('frontend/assets/images/fb.svg') }}"  class="icon-facebook-f"></a>
			<a href="#" class="social-icon" target="_blank" title="Instagram"><img src="{{ asset('frontend/assets/images/insta.svg') }}" class="instagram"></a>
			<a href="#" class="social-icon" target="_blank" title="Youtube"><img src="{{ asset('frontend/assets/images/youtube.svg') }}" class="youtube"></a>
			<a href="#" class="social-icon" target="_blank" title="Twitter"><img src="{{ asset('frontend/assets/images/tw.svg') }}"  class="icon-twitter"></a>
			
		</div><!-- End .social-icons -->
	</div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

