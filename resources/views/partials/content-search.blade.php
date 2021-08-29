<article @php(post_class('py-6 lg:py-8'))>

  <a href="{{ get_permalink() }}">
    <h3 class="mb-3 text-2xl font-bold font-gt text-c-blue-200 lg:text-3xl">{!! $title !!}</h3>
  </a>
  <div class="mb-3 text-sm search-excerpt xl:text-base">@php(the_excerpt())</div>
  <div>
    <a href="{!! get_permalink()!!}" target="_blank"
      class="inline-flex items-center font-medium text-black font-whyte hover:underline">
      <span class="mr-1.5">Read More</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd"
          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
          clip-rule="evenodd" />
      </svg>
    </a>
  </div>
</article>