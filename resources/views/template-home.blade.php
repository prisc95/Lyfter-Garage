{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    {{-- @include('partials.page-header') --}}
    @include('partials.content-page')
    @include('partials.pageblocks.hero')
    @include('partials.pageblocks.usp-grid')
    @include('partials.pageblocks.text-media')
    @include('partials.pageblocks.media-text')
  @endwhile
@endsection
