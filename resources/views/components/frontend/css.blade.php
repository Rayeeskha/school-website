<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gareeb Nawaz Markaz</title>
	<meta name="keywords" content="Gareeb Nawaz Markaz">
	<meta name="description" content="Gareeb Nawaz Markaz">
	<meta name="author" content="khan Rayees">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/icons/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/icons/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/icons/favicon-16x16.png') }}">
	<link rel="manifest" href="{{ asset('frontend/assets/images/icons/site.html') }}">
	<link rel="mask-icon" href="{{ asset('frontend/assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
	<link rel="shortcut icon" href="{{ asset('frontend/assets/images/icons/favicon.ico') }}">
	<meta name="apple-mobile-web-app-title" content="Opera">
	<meta name="application-name" content="Opera">
	<meta name="msapplication-TileColor" content="#cc9966">
	<meta name="msapplication-config" content="{{ asset('frontend/assets/images/icons/browserconfig.xml') }}">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="{{ asset('frontend/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/carousel.css') }}">
	<script defer src="{{ asset('frontend/assets/js/carousel.js') }}"></script>
	

	<style type="text/css">
		.nav-style li a{border-bottom:  1px solid silver}
		
		@if(session()->get('locale') == 'ur')
        p{font-size: 22px;font-family: Arial, sans-serif;  font-style: italic;  font-weight: 400;}
        nav ul li a{font-size: 20px !important;text-align: right;}
        @media only screen and (max-width: 767px) {
		    p {
		        font-size: 25px;font-family: Arial, sans-serif;  font-style: italic;  font-weight: 400;
		    }
		}
		@media only screen and (max-width: 991px) {
		  p {
		    font-size: 25px;font-family: Arial, sans-serif;  font-style: italic;  font-weight: 400;

		  }
		}
		.rtl-card {
		    direction: rtl;
		}

		.rtl-text {
		    text-align: right;
		}
		.urdu-title{font-size: 35px; font-family: Arial, sans-serif;  font-style: italic;  font-weight: 400; }
		.widget-list li a{font-size: 20px}
		.widget-title {font-size: 25px !important}
		.urdu-text{font-size: 20px;font-family: Arial, sans-serif;  font-style: italic;  font-weight: 400;}
		@endif
	</style>


</head>