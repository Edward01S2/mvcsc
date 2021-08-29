@extends('layouts.app')

@section('content')

<div class="relative">
    @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
    @endif

    <div class="pt-12 pb-24 xl:pb-16">

      <div class="relative px-6 mx-auto max-w-7xl lg:px-8">
        <div class="">
          <h1 class="text-4xl font-extrabold lg:text-5xl xl:text-6xl">Events</h1>
        </div>
        <div class="grid max-w-lg gap-5 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none lg:gap-8 xl:gap-12">
 
          @while(have_posts()) @php(the_post())
          @php($EM_Event = em_get_event(get_the_ID(), 'post_id'))
          @include('partials.event-item', ['event' => $EM_Event])
          @endwhile 
  
        </div>
      </div>

      @if($pagi)
      <div class="flex justify-center">
        {!! $pagi !!}
      </div>
      @endif
    </div>

  </div>
</div>
{{-- @dump($pagi) --}}
@endsection
