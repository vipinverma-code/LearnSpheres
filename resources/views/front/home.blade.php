@extends('front.layout.master')
@section('content')
    {{-- @include('front.components.course-categories') --}}
    @include('front.components.mainbanner')
    @include('front.components.counterstart')
    @include('front.components.popularcourse')
    @include('front.components.actionbox')
    @include('front.components.trendingcourse')
    @include('front.components.reveiws')
@endsection
