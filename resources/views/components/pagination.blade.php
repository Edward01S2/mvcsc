@if ($pagi->hasPages())
<nav class="flex items-center my-8" role="navigation" aria-label="pagination">

  <a href="{{ $pagi->previousPageUrl() }}" rel="prev" aria-label="Previous Page"
    class="@if($pagi->onFirstPage()) pointer-events-none @endif">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
        clip-rule="evenodd" />
    </svg>
  </a>


  <ul class="flex space-x-2">
    @foreach ($pagi->elements() as $element)
    @if (is_string($element))
    <li class="disabled" aria-disabled="true">
      <span class="py-1 mr-3">&hellip;</span>
    </li>
    @endif

    @if (is_array($element))
    @foreach ($element as $page => $url)
    <li>
      @if ($page == $pagi->currentPage())
      <span class="bg-[#909090] w-3 h-3 rounded-full inline-block" aria-current="page"></span>
      @else
      <span class="bg-[#D8D8D8] w-3 h-3 rounded-full inline-block" aria-current="page"></span>
      @endif
    </li>
    @endforeach
    @endif
    @endforeach
  </ul>


  <a href="{{ $pagi->nextPageUrl() }}" rel="next" aria-label="Next Page"
    class="@if(!$pagi->hasMorePages()) pointer-events-none @endif">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd" />
    </svg>
  </a>

</nav>
@endif