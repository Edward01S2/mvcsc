{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="px-6 pt-12 pb-24 mx-auto max-w-7xl lg:px-8">
      <h1 class="text-4xl font-extrabold lg:text-5xl xl:pb-12 xl:text-6xl">{!! $title !!}</h1>
      <div class="prose lg:prose-lg">
        @php(the_content())
    </div>
    </div>
  @endwhile
@endsection