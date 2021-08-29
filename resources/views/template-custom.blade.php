{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="px-6 pt-12 pb-24 mx-auto max-w-7xl lg:px-8">
      @include('partials.content-page')
    </div>
  @endwhile
@endsection
 å