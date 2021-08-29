@extends('layouts.app')

@section('content')
<?php global $wp_query ?>
<div class="relative">
  @svg('images.waves-new', 'absolute w-full h-[24rem] top-0 left-0 right-0 z-10 object-cover')

  <div class="max-w-[1280px] mx-auto relative z-20">
    <div>
      <div>
        <div class="flex flex-col justify-between px-6 sm:flex-row sm:items-center xl:pt-6">
          <div class="order-2 sm:order-1">
            <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
          }
        ?>
          </div>
          <div class="z-30 flex-shrink-0 order-1 opt-container sm:order-2">
            <div class="opt-inner">
              <div class="flex justify-end">
                <a href="{!! $opt['url'] !!}" class="inline-flex items-center py-6 opt-button">
                  <span class="mr-3 text-2xl font-bold transition duration-200 opt-text font-gt">{!!
                    $opt['title']!!}</span>
                  <div class="rounded-full bg-gradient-to-r from-c-blue-200 to-[#20D3FF] p-3">
                    <svg class="w-5 h-5" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M10.8 0C9.36783 0 7.99432 0.585316 6.98162 1.62718C5.96893 2.66905 5.4 4.08213 5.4 5.55556C5.4 7.02898 5.96893 8.44206 6.98162 9.48393C7.99432 10.5258 9.36783 11.1111 10.8 11.1111C12.2322 11.1111 13.6057 10.5258 14.6184 9.48393C15.6311 8.44206 16.2 7.02898 16.2 5.55556C16.2 4.08213 15.6311 2.66905 14.6184 1.62718C13.6057 0.585316 12.2322 0 10.8 0ZM10.8 2.77778C11.5161 2.77778 12.2028 3.07044 12.7092 3.59137C13.2155 4.1123 13.5 4.81884 13.5 5.55556C13.5 6.29227 13.2155 6.99881 12.7092 7.51974C12.2028 8.04067 11.5161 8.33333 10.8 8.33333C10.0839 8.33333 9.39716 8.04067 8.89081 7.51974C8.38446 6.99881 8.1 6.29227 8.1 5.55556C8.1 4.81884 8.38446 4.1123 8.89081 3.59137C9.39716 3.07044 10.0839 2.77778 10.8 2.77778ZM10.8 12.5C7.1955 12.5 0 14.3472 0 18.0556V22.2222H12.825C12.4852 21.3806 12.2713 20.4909 12.1905 19.5833H2.565V18.0556C2.565 17.1667 6.7905 15.1389 10.8 15.1389C11.475 15.1389 12.15 15.2083 12.825 15.3194C13.1714 14.4424 13.6498 13.6269 14.2425 12.9028C12.9735 12.6389 11.7585 12.5 10.8 12.5ZM20.925 12.5C17.55 12.5 14.85 15.2778 14.85 18.75C14.85 22.2222 17.55 25 20.925 25C24.3 25 27 22.2222 27 18.75C27 15.2778 24.3 12.5 20.925 12.5ZM20.925 14.5833C23.166 14.5833 24.975 16.4444 24.975 18.75C24.975 19.5278 24.7725 20.25 24.408 20.8333L18.9 15.1667C19.467 14.7917 20.169 14.5833 20.925 14.5833ZM17.442 16.6667L22.95 22.3333C22.383 22.7083 21.681 22.9167 20.925 22.9167C18.684 22.9167 16.875 21.0556 16.875 18.75C16.875 17.9722 17.0775 17.25 17.442 16.6667Z"
                        fill="white" />
                    </svg>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="px-6 pt-8 sm:pt-0 xl:pt-0">
          <h1 class="mb-4 text-3xl font-bold font-gt sm:text-5xl xl:text-6xl 2xl:leading-tight 2xl:text-7xl md:mb-6">
            {!! $wp_query->found_posts !!} results for <span class="text-c-blue-200">{!! the_search_query() !!}</span>
          </h1>
          <form action="{!! home_url(); !!}" role="search" method="post" id="search-results"
            class="relative text-[#304A88] max-w-xl">
            <button class="absolute bottom-0 left-0 mb-3 ml-4" type="submit" id="searchsubmit-result">
              <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path
                  d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z" />
              </svg>
            </button>
            <input type="text" id="s" name="s" value="" autocomplete="off"
              class="w-full py-2 pl-10 pr-6 focus:outline-none font-normal font-gt border-[#4160AB] rounded-full placeholder-[#304A88]"
              placeholder="Search">

          </form>
        </div>

      </div>
    </div>

    <div class="px-6 pb-16 lg:px-8 xl:pb-24">
      <div class="flex flex-col divide-y divide-gray-300 lg:max-w-3xl lg:mx-auto xl:max-w-4xl 2xl:max-w-5xl">
        @while(have_posts()) @php(the_post())
        @include('partials.content-search')
        @endwhile
      </div>

      <div class="flex justify-center">
        {!! $pagi !!}
      </div>
    </div>

  </div>
</div>
{{-- @dump($pagi) --}}
@endsection