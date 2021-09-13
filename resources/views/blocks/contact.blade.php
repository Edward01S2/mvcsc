<div class="{{ $block->classes }}">
  <div class="bg-white">
    <div class="px-4 pt-12 pb-24 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="divide-y-2 divide-gray-200">
        @if($items)
        <div class="pb-16 mb-16 lg:grid lg:grid-cols-3 lg:gap-8">
          <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
            {!! $title !!}
          </h2>
          <div class="grid grid-cols-1 gap-12 mt-8 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
            @if($items)
            @foreach($items as $item)
            <div>
              <div class="mt-2 text-base text-gray-700 contact-item">
                  {!! $item['item'] !!}
              </div>
            </div>
            @endforeach
            @endif
          </div>
        </div>
        @endif

        @if($address)
        <div class="pb-16 mb-16 lg:grid lg:grid-cols-3 lg:gap-8">
          <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
            Mailing Address
          </h2>
          <div class="grid grid-cols-1 gap-12 mt-8 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
            <div>
              <div class="mt-2 text-xl text-gray-700">
                {!! $address !!}
              </div>
            </div>

          </div>
        </div>
        @endif

        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
          <div>
            <h2 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">
              Contact
            </h2>
            <div class="mt-4 text-lg text-gray-800 lg:text-base lg:pr-6"> 
              {!! $subtitle !!}
            </div>
          </div>
          <div class="mt-8 contact-form lg:col-span-2 lg:mt-0">
            @if($form)
              @include('partials.form', ['form' => $form])
            @endif
          </div>
        </div>

      </div>
    </div>
  </div>
  
</div>
