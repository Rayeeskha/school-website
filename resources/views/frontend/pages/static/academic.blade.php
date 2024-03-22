@extends('frontend.layouts.app')
@section('page_title',Lang::get('front.ghareeb_nawaz') . " ".Lang::get('academic.academic'))
@section('meta_keywords',Lang::get('front.ghareeb_nawaz') . " ".Lang::get('academic.academic'))
@section('meta_description', Lang::get('front.ghareeb_nawaz'). " ". Lang::get('academic.academic'))
@section('container')

@include('frontend.pages.static.header', ['heading'=> Lang::get('academic.academic')])



@endsection