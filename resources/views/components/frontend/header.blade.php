<body>
<div class="page-wrapper">
<header class="header header-6">
	<div class="header-top">
		@php 
			$style = "";
			$languageUrl = "lang/change/en";
			$language = "front.English";
			if(session()->get('locale') == 'ur'){
				$style = "flex-row-reverse";
				$languageUrl = "lang/change/ur";
				$language = "front.Urdu";
			}
		@endphp
		<div class="container {{ $style }}">
			<div class="header-left">
				<ul class="top-menu top-link-menu d-none d-md-block">
					<li>
						<ul>
							<li><a href="tel:9838239110"><i class="icon-phone"></i> 
							+919838239110</a></li>
							<li><a href="mailto:info@ghareebnawazmarkaz.com"><i class="icon-envelope"></i> info@ghareebnawazmarkaz.com</a></li>
						</ul>
					</li>
				</ul><!-- End .top-menu -->
			</div><!-- End .header-left -->

			<div class="header-right">
				<div class="header-dropdown">
					<a href="{{ url($languageUrl) }}" class="language">@lang($language)</a>
					<div class="header-menu">
						<ul >
							@if(session()->get('locale') == 'ur')
								<li><a href="{{ url('lang/change/en') }}">@lang('front.English')</a></li>
							@else
								<li><a href="{{ url('lang/change/ur') }}">@lang('front.Urdu')</a></li>
							@endif
						</ul>
					</div><!-- End .header-menu -->
				</div><!-- End .header-dropdown -->
			</div><!-- End .header-right -->
		</div>
	</div>
	<div class="header-middle">
		<div class="container">
			<div class="header-left">
				<div class="header-search header-search-extended header-search-visible d-none d-lg-block">
					<a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
				
				</div><!-- End .header-search -->
			</div>
			<div class="header-center">
				<a href="/" class="logo">
					<img src="{{ asset('frontend/assets/logo/logo.jpg') }}" alt="Opera Logo" width="82" height="20">
				</a>
			</div><!-- End .header-left -->

			<div class="header-right"></div>
		</div><!-- End .container -->
	</div><!-- End .header-middle -->

	<div class="header-bottom sticky-header ">
		<div class="container ">
			<div class="header-left rtl-card">
				<nav class="main-nav ">
					<ul class="menu">
						<li class="active">
							<a href="/">
								@lang('front.Home')
							</a>
						</li>
						<!-- <li class="active">
							<a href="#!">
								Introduction
							</a>
						</li> -->
						<li>
							<a href="#!" class="sf-with-ul">
								@lang('front.examination')
								<!-- @lang('front.academic') -->
								<!-- @lang('front.Introduction') -->
							</a>
							<ul class="nav-style">
								<li><a href="{{ route('page', 'examination') }}">@lang('front.examination')</a></li>
								<li><a href="#!">@lang('front.aims_nd_obj')</a></li>
								<li>
									<a href="#!" >@lang('front.section_nd_branch')</a>
								</li>
								
							</ul>
						</li>
						<li>
							<a href="#!" class="sf-with-ul">
								@lang('academic.academic')
							</a>
							<ul class="nav-style">
								<li>
									<a href="#!">@lang('academic.academic') </a>
								</li>
								<li>

									<a href="{{ route('page', 'admission') }}">@lang('front.admission')</a></li>
								<li>
									<a href="{{ route('staff_details') }}" >@lang('front.staff_details')</a>
								</li>
								
								<li>
									<a href="{{ route('course_detail') }}" >@lang('front.course_detail')</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href="#!" class="sf-with-ul"> @lang('front.Services')</a>

							<ul class="nav-style">
								<li><a href="#!">@lang('front.q_nd_library') </a></li>
								<!-- <li><a href="#!">@lang('front.Markazi_dar_al_Ifta') </a></li> -->
								<!-- <li><a href="#!">@lang('front.qadri')</a></li> -->
							</ul>
						</li>

					</ul><!-- End .menu -->
				</nav><!-- End .main-nav -->

				<button class="mobile-menu-toggler">
					<span class="sr-only">Toggle mobile menu</span>
					<i class="icon-bars"></i>
				</button>
			</div><!-- End .header-left -->
			<div class="logo-middle">
				<a href="#!">
					<img src="{{ asset('frontend/assets/logo/logo.jpg') }}" class="sticky-logo" alt="Footer Logo" width="82" height="25">
				</a>
			</div>
			<div class="header-right">
				<nav class="main-nav">
					<ul class="menu">
						<li>
							<a href="#!" class="sf-with-ul">@lang('front.media')</a>

							<ul class="nav-style">
								<li><a href="#!" class="sf-with-ul">@lang('front.audio')</a>
									<ul>
										<li><a href="{{ route('gallary',['Audio', 'Weekly-Q-A']) }}">@lang('front.weekly_q_a')</a></li>
										<li><a href="{{ route('gallary',['Audio', 'Dars-e-Hadith']) }}">@lang('front.dars_e_hadith')</a></li>
										<li><a href="{{ route('gallary',['Audio', 'Hamd-Naat']) }}">@lang('front.hamd_nd_naat')</a></li>
										<li><a href="{{ route('gallary',['Audio', 'Speeches']) }}">@lang('front.Speeches')</a></li>
									</ul>
								</li>

								<li><a href="{{ route('gallary','Literature') }}" class="sf-with-ul">@lang('front.Literature')</a>
									<ul>
										<li><a href="{{ route('gallary',['Literature', 'Urdu']) }}">@lang('front.Urdu')</a></li>
										<li><a href="{{ route('gallary',['Literature', 'English']) }}">@lang('front.English')</a></li>
									</ul>
								</li>
								<li>
									<a href="{{ route('gallary','Image') }}">@lang('front.img_nd_galary')</a>
								</li>
								<li><a href="{{ route('event') }}"> @lang('front.Events')</a>
								</li>
								</li>
							</ul>
						</li>
						<li>
							<a href="#!" class="sf-with-ul"> @lang('front.Live')</a>
							<ul  class="nav-style">
								<li><a href="#!">@lang('front.weekly_q_a') </a></li>
								<li><a href="#!">@lang('front.dars_e_hadith')</a></li>
							</ul>
						</li>
						<li>
							<a href="#!">@lang('front.Donation')</a>
							<ul class="nav-style">
								<li>
									<a href="#!">
									@lang('front.online_donation')</a>
								</li>
								<li>
									<a href="#!">@lang('front.Kifalat') </a>
								</li>
								<li>
									<a href="#!">
									@lang('front.bnk_deposit')
								</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#!">@lang('front.contact_us') </a>
							<ul class="nav-style">
								<li>
									<a href="{{ route('page', 'contact-us') }}">
										@lang('front.markaz_ghareeb')
									</a>
								</li>
								<li>
									<a href="#!">@lang('front.the_principle') </a>
								</li>
								<li>
									<a href="#!">@lang('front.Donations') </a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div><!-- End .container -->
	</div><!-- End .header-bottom -->
</header><!-- End .header -->
