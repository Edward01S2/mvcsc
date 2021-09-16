@if($banner)
<div class="banner-container" x-data="{ open: true }">
  <div class="relative bg-[#364712] banner-container" x-show="open">
    <div class="px-6 py-3 mx-auto max-w-7xl lg:px-8">
      <div class="pr-16 sm:text-center sm:px-16">
        <div class="font-medium text-white banner-text">
          {!! $banner !!}
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-start pt-1 pr-1 sm:pt-1 sm:pr-2 sm:items-start">
        <button type="button" class="flex p-2 rounded-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-white" x-on:click="open = ! open">
          <span class="sr-only">Dismiss</span>
          <!-- Heroicon name: outline/x -->
          <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>
@endif

<header x-data="{ open: false }" class="relative bg-white shadow">

  <div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="">
      <div class="flex items-center justify-between py-3">
        <a class="flex-shrink-0 brand" href="{{ home_url('/') }}">
          <img src="{!! $header_icon['url'] !!}" alt="logo" class="w-auto h-12 lg:h-20">
        </a>
        <div class="lg:hidden">
          <div class="relative flex menu-btn item-center">
            <button @click="open = ! open"
              class="inline-flex items-center justify-center text-sm text-black transition duration-150 ease-in-out rounded-md focus:outline-none hover:text-green-600"
              aria-label="Main menu" aria-expanded="false">
              <!-- Icon when menu is closed. -->
              <svg :class="{'hidden': open, 'block': !open }" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <!-- Icon when menu is open. -->
              <svg :class="{'block': open, 'hidden': !open }" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" x-cloak>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>

        <div class="hidden lg:flex">
          @if($primary)
          @foreach($primary as $item)
          <div>
            <div class="flex items-center group">
              <a id="primary-{!! $loop->iteration !!}"
                class="pl-8 xl:pl-10 primary-link inline-flex items-center py-7 nav-link tracking-wider transition duration-300 ease-in-out focus:outline-none text-[0.8rem] text-[#4B5320] hover:text-green-600 lg:text-base xl:py-8 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}"
                href="{{ $item->url }}" target="{{ $item->target }}" data-int="{!! $loop->iteration !!}">
                <span>{!! $item->label !!}</span>  
              </a>
            </div>
          </div>
          @endforeach
          @endif
        </div>

      </div>
    </div>
  </div>

  <div x-show="open" class="relative border-t border-gray-200 bg-gray-50 z-60 lg:hidden" x-cloak>
    <div @click.outside="open = false" class="px-6 py-4 sm:py-6">
      <div class="container-w">
        <div class="inline-flex flex-col font-gt">
          @if($primary)
          @foreach ($primary as $item)
          <div x-data="{ open: false }">
            <div class="flex items-center">
              <a @click="open = false"
                class="inline-block py-3 nav-link md:pb-1 tracking-wider transition duration-300 ease-in-out focus:outline-none md:text-base hover:text-green-600 border-b-gradient sm:py-3 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}"
                href="{{ $item->url }}" target="{{ $item->target }}">
                {!! $item->label !!}
              </a>
              @if($item->children)
              <button class="focus:outline-none" @click="open = !open">
                <svg xmlns=" http://www.w3.org/2000/svg" class="w-6 h-6 ml-2.5 transform text-c-blue-200"
                  viewBox="0 0 20 20 " :class="{'rotate-180': open }" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </button>
              @endif
            </div>

            <div :class="{'block': open, 'hidden': !open }" class="w-full" x-cloak>
              <ul class="inline-flex flex-col py-2 pl-4 space-y-3">
                @foreach($item->children as $child)
                <a class="transition duration-300 hover:text-c-blue-200 border-b-gradient"
                  href="{!! $child->url !!}">{!! $child->label !!}</a>
                @endforeach
              </ul>
            </div>
          </div>
          @endforeach
          @endif
          @if($secondary)
          @foreach($secondary as $item)
          <div class="sm:hidden">
            <a href="{{ $item->url }}" target="{{ $item->target }}" @click="open = false"
              class="inline-block py-2 nav-link md:pb-1 tracking-wider transition duration-300 ease-in-out focus:outline-none md:text-base hover:text-c-blue-200 border-b-gradient sm:py-3 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">{!!
              $item->label !!}</a>
          </div>
          @endforeach
          @endif
        </div>

      </div>
    </div>
  </div>

</header>