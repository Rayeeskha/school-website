<div class="app-menu navbar-menu">
<!-- LOGO -->
<div class="navbar-brand-box">
   <!-- Dark Logo-->
   <a href="#!" class="logo logo-dark">
   <span class="logo-sm">
   <img src="{{ asset('frontend/assets/logo/logo.jpg') }}" alt="" height="22">
   </span>
   <span class="logo-lg">
   <img src="{{ asset('frontend/assets/logo/logo.jpg') }}" alt="" height="17">
   </span>
   </a>
   <!-- Light Logo-->
   <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
   <span class="logo-sm">
   <img src="{{ asset('frontend/assets/logo/logo.jpg') }}" alt="" height="22">
   </span>
   <span class="logo-lg">
   <img src="{{ asset('frontend/assets/logo/logo.jpg') }}" alt="" height="60px" width="60px">
   </span>
   </a>
   <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
   <i class="ri-record-circle-line"></i>
   </button>
</div>
<div id="scrollbar">
   <div class="container-fluid">
      <div id="two-column-menu"></div>
      <ul class="navbar-nav" id="navbar-nav">         
         <li class="nav-item">
            <a class="nav-link menu-link " href="{{ route('admin.dashboard') }}">
               <i class="ri-honour-line"></i> <span data-key="t-widgets">Dashboards</span>
            </a>
        </li>

         <!-- end Dashboard Menu -->
         <li class="nav-item">
            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
            <i class="ri-account-circle-line"></i> <span data-key="t-apps">Academic</span>
            </a>
            <div class="collapse menu-dropdown {{ (in_array(Route::currentRouteName(),['admin.course.index','admin.teacher.index']) ? 'show' :'')}}" id="sidebarApps">
               <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                     <a href="{{ route('admin.course.index') }}" class="nav-link" data-key="t-calendar"> Course </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('admin.teacher.index') }}" class="nav-link" data-key="t-calendar"> Staff </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="nav-item">
            <a class="nav-link menu-link " href="{{ route('admin.event.index') }}">
               <i class="ri-layout-3-line"></i> <span data-key="t-widgets">Events</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link menu-link " href="{{ route('admin.media.index') }}">
               <i class="ri-layout-3-line"></i> <span data-key="t-widgets">Media</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link menu-link " href="{{ route('admin.contact-us.index') }}">
               <i class="ri-layout-3-line"></i> <span data-key="t-widgets">Contact us</span>
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
            <i class="ri-rocket-line"></i> <span data-key="t-landing">Settings</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarLanding">
               <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                     <a href="{{ route('admin.slider.index') }}" class="nav-link" data-key="t-one-page"> Slider </a>
                  </li>
               </ul>
            </div>
         </li>
      </ul>
   </div>
   <!-- Sidebar -->
</div>
<div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>