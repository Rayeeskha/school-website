@extends('frontend.layouts.app')
@section('page_title','Staff detail')
@section('meta_keywords','Staff detail')
@section('meta_description', 'Staff detail')
@section('container')

@include('frontend.pages.static.header', ['heading'=> Lang::get('front.staff_details')])
<br><br>
<style>
  .teacher-card {
    border: 1px solid #ccc;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .teacher-card:hover {
    transform: translateY(-5px);
  }

  .teacher-card .card-img-top {
    height: 200px;
    object-fit: cover;
    border-bottom: 1px solid #ddd;
  }

  .teacher-card .card-body {
    padding: 20px;
  }

  .teacher-card h5.card-title {
    margin-bottom: 15px;
    font-size: 18px;
    color: #333;
  }

  .teacher-card p.card-text {
    margin-bottom: 0;
    font-size: 14px;
    color: #777;
  }

  .teacher-contact-info {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }

  .teacher-contact-info img {
    margin-right: 10px;
    width: 20px;
    height: 20px;
  }

  @media (max-width: 767.98px) {
    .teacher-card .card-img-top {
      height: 150px;
    }
  }
</style>

<div class="container-fluid">
  <div class="row">
    @foreach($teachers ?? [] as $teacher)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="teacher-card">
    <img src="{{ asset($teacher->photo) }}" class="card-img-top" alt="teacher-photo" style="width: 100%; height: 250px; object-position: top;">
        @php
        $dir = "ltr";
        $name = $teacher->name;
        if(session()->get('locale') == 'ur'){
        $name = $teacher->name_ur;
        $dir = "rtl";
        }
        @endphp
        <div class="card-body" dir="{{ $dir }}" style="height: 200px">
          <h5 class="card-title">
            <div class="row">
            	<div class="col-md-6">
            		<strong>@lang('front.name'):</strong> {{ $name }}
            	</div>
            	<div class="col-md-6">
            		<div class="teacher-contact-info">
		            	<img src="frontend/assets/images/phone2.png" alt="phone-icon" > {{ $teacher->phone }}
		            </div>
            	</div>
              <div class="col-md-12" style="border-top: 1px solid silver">
                @if(session()->get('locale') == 'ur')
                 {{ Str::limit($teacher->serving_to_inst_ur, 40) }}<br>{{ Str::limit($teacher->education_detail_ur, 60) }}
                @else
                 {{ Str::limit($teacher->serving_to_inst,40) }}<br>{{ Str::limit($teacher->education_detail, 60) }}
                @endif
              </div>
            </div>
          </h5>

          <p class="card-text" style="border-top: 1px solid silver">
            @php
            $qalification = $teacher->qualification;
            $specility = $teacher->specility;
            if(session()->get('locale') == 'ur'){
            $qalification = $teacher->qualification_ur;
            $specility = $teacher->specility_ur;
            }
            @endphp
            <div class="row">
              <div class="col-md-6">
                <strong>@lang('front.Qualification'):</strong><br> {{ $qalification }}
              </div>
              <div class="col-md-6">
                <strong>@lang('front.Speciality'):</strong><br> {{ $specility }}
              </div>
            </div>
          </p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<br><br>


@endsection