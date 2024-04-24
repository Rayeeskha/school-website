<!DOCTYPE html>
<html lang="en" >
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('page_title')</title>
      <meta name="keywords" content="@yield('meta_keywords','Darul Uloom Ahl-e-Sunnat Gharib Nawaz')">
      <meta name="description" content="@yield('meta_keywords','Darul Uloom Ahl-e-Sunnat Gharib Nawaz')">
      <meta name="author" content="khan Rayees">
      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/logo/logo.jpg') }}">
      <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/logo/logo.jpg') }}">
      <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/logo/logo.jpg') }}">
      <link rel="manifest" href="{{ asset('frontend/assets/images/icons/site.html') }}">
      <link rel="mask-icon" href="{{ asset('frontend/assets/logo/logo.jpg') }}" color="#666666">
      <link rel="shortcut icon" href="{{ asset('frontend/assets/logo/logo.jpg') }}">
      <meta name="apple-mobile-web-app-title" content="Ghareebnawazmarkaz">
      <meta name="application-name" content="Ghareebnawazmarkaz">
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
      <!-- <script defer src="{{ asset('frontend/assets/js/carousel.js') }}"></script> -->
      <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">
      <style type="text/css">
         *{
         font-family: "Noto Nastaliq Urdu", serif !important;
         font-optical-sizing: auto;
         font-weight: 500;
         font-style: normal;
         word-spacing:8px !important;
         text-align: justify;
         }
         /* 
         .para1{
         color:green !important;
         font-family: "Noto Nastaliq Urdu", serif !important;
         font-optical-sizing: auto;
         font-weight: 500;
         font-style: normal;
         } */
         body{
         /* font-family: 'Noto Nastaliq Urdu'; */
         font-family: "Noto Nastaliq Urdu", serif !important;
         font-optical-sizing: auto;
         font-weight: 500;
         font-style: normal;
         font-size: 22px;
         text-align: justify;
         }
         .nav-style li a{border-bottom:  1px solid silver}
         .teacher-contact-info img {
         margin-right: 50px !important;
         width: 15px !important;
         height: 15px !important;
         margin-top:10px !important;
         width:15px !important;
         height:10px;
         }
         /*.quali-spe{
         position: absolute;
         left:28px;
         }*/
         .quali-spe .quali-spe1{
         font-size:15px !important;
         font-weight:bold;
         padding:0px !important;
         margin:0px !important;
         }
         .quali-spe .quali-spe2 {
         font-size:13px !important;
         padding:0px !important;
         margin:0px !important;
         }
         /* media query */
         @media (max-width:470px){
         p{
         font-size: 18px!important;
         width:100% !important;
         font-weight: 300;
         }
         strong {
         font-weight: 700;
         font-size: 18px;
         }
         .teacher-contact-info img {
         margin-right: 50px !important;
         width: 15px !important;
         height: 15px !important;
         margin-top:10px !important;
         width:15px !important;
         height:10px;
         }
         .span1{
         line-height: 22px !important;
         font-size: 16px;
         }
         .mn{
         font-size:18px;
         }
         /*.quali-spe{
         position: absolute;
         left:30px;
         }*/
         .quali-spe .quali-spe1{
         font-size:15px !important;
         font-weight:bold;
         }
         .quali-spe .quali-spe2 {
         font-size:13px !important;
         }
         .span4{
         font-size 18px;
         line-height: 22px;
         font-weight:500;
         }
         .span4::after{
         content: ":";
         }
         h2{
         font-size: 24px!important;
         width:100% !important;
         font-weight: 500;
         }
         .uu{
         font-size:18px;
         }
         }
         @media only screen and (max-width: 767px) {
         .quali-spe .quali-spe1{
         font-size:15px !important;
         font-weight:bold;
         }
         .quali-spe .quali-spe2 {
         font-size:13px !important;
         }
         /*.quali-spe{
         position: absolute;
         left:30px;
         }*/
         p {
         font-size: 18px;
         font-weight: 400;
         }
         .teacher-contact-info img {
         margin-right: 50px !important;
         width: 15px !important;
         height: 15px !important;
         margin-top:10px !important;
         width:15px !important;
         height:10px;
         }
         }
         @media only screen and (max-width: 991px) {
            .quali-spe .quali-spe1{
            font-size:15px !important;
            font-weight:bold;
            }
            .quali-spe .quali-spe2 {
            font-size:13px !important;
            }
            /*.quali-spe{
            position: absolute;
            left:30px;
            }*/
            .teacher-contact-info img {
            margin-right: 50px !important;
            width: 15px !important;
            height: 15px !important;
            margin-top:10px !important;
            width:15px !important;
            height:10px;
            }
            p { font-size: 18px; font-weight: 400; }
         } 
         @if(session()->get('locale') == 'ur')
         p{font-size: 18px;
         /* font-family: Arial, sans-serif;    */
         font-weight: 400;}
         nav ul li a{font-size: 20px !important;text-align: right;}
         .rtl-card { direction: rtl; }
         .rtl-text { text-align: right; }
         .urdu-title{font-size: 22px;
         /* font-family: Arial, sans-serif;   */
         font-weight: 400; }
         .widget-list li a{font-size: 20px}
         .widget-title {font-size: 25px !important}
         .urdu-text{font-size: 18px;
         font-weight: 400;}

         /*.quali-spe{
         position: absolute;
         left:30px;
         }*/
         @endif 
        /* .title-1{ 
         font-size: 30px;*/
         /* font-family: sans-serif !important;  */
         /*font-weight: bold; }*/
         .para p{ color: #000000;  !important; } 
         /* .home{ color: blue; } */

         .btn-card {
             display: inline-flex;
             font-size: 13px;
             border-radius: 5px;
             white-space: normal;
             transition: all 0.3s;
             padding:0px 10px 10px;
             font-weight: 400;
             line-height: 1.0;
             min-width: 10px;
         }
         .btn-card-body{
            padding: 0.1rem 1rem 1.4rem 1.4rem;
         }
         .btn-card-body p {
            font-size: 1.5rem;
         }

         .card-new-icon{
            position:absolute;
             top:4px;
         }
         .card-new-icon-1{
             right:10px;
         }
         .card-new-icon-2{
             left:10px;
         }


      </style>
   </head>