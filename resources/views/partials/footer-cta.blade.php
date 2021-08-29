<div class="relative z-10 footer-cta">
  <div class="bg-[#0751A3] relative overflow-hidden">
    @svg('images.waves-new', 'absolute w-full h-[60%] bottom-0 left-0 right-0 z-10 object-cover transform rotate-180
    waves')
    <div class="relative z-20 container-w">
      <div class="py-12 md:py-20">
        <h2 class="">{!! $cta['title'] !!}</h2>
        <div
          class="flex flex-col items-center justify-center space-y-6 button-container sm:flex-row sm:space-y-0 sm:space-x-8 lg:space-x-12 xl:space-x-16">
          @foreach($cta as $link)
          @if(is_array($link))
          <div class="">
            <a class="button" href="{!! $link['url'] !!}">{!! $link['title'] !!}</a>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>