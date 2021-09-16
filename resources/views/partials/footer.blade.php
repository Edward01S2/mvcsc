<footer class="bg-[#364712]">
  <div class="px-6 py-12 mx-auto max-w-7xl lg:px-8">
    <div class="flex flex-col lg:flex-row lg:space-x-12 lg:items-center">
      <div class="flex flex-col mb-8 lg:flex-row lg:mb-0 lg:w-1/3 lg:items-center">
        <img src="{!! $logo['url'] !!}" alt="" class="w-40 h-40 mx-auto">
        <div class="mt-2 text-sm text-center text-green-50 lg:text-left lg:ml-2 lg:mt-0">
          {!! $aff_text !!}
        </div>
      </div>
      <div class="text-sm italic text-green-50 lg:flex-1">
        {!! $content !!}
      </div>
    </div>
    <div class="mt-8 md:flex md:items-center md:justify-between">
      <div class="flex justify-center space-x-6 md:order-2">
        @if($social)
        @foreach($social as $item)
        <a href="{!! $item['link']['url'] !!}" class="text-white hover:text-gray-500" target="_blank">
          <span class="sr-only">Facebook</span>
          @svg($item['icon'], 'h-6 w-6 md:h-8 md:w-8')
        </a>
        @endforeach
        @endif

      </div>
      <div class="mt-8 md:mt-0 md:order-1">
        <p class="text-base text-center text-white">
          &copy; <?php echo esc_attr( date( 'Y' ) ); ?> {!! $siteName !!}. All rights reserved.
        </p>
      </div>
    </div>
  </div>
</footer>