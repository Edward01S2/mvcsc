<div class="{{ $block->classes }}">
  <div class="relative pt-6 pb-24 overflow-hidden about-container">
    @if($items)
    @foreach($items as $item)
      <div class="relative mt-12 about-item lg:mt-24">
        <div class="px-6 lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
          <div class="max-w-xl mx-auto lg:py-16 lg:max-w-none lg:mx-0 lg:px-0 content-container">
            <div>
              <div class="mt-6">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                  {!! $item['title'] !!}
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                  {!! $item['content'] !!}
                </p>
                {{-- <div class="mt-6">
                  <a href="#" class="inline-flex px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                    Get started
                  </a>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="mt-12 sm:mt-16 lg:mt-0 img-item">
            <div class="-mr-48 md:-mr-16 lg:px-0 lg:relative lg:h-full xl:mx-0 img-container">
              <img class="object-cover object-center w-full rounded-sm shadow-xl max-h-72 lg:max-h-full ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-full lg:max-w-none" src="{!! $item['image']['url'] !!}" alt="">
            </div>
          </div>
        </div>
      </div>
    @endforeach
    @endif

    {{-- <div class="mt-24">
      <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
        <div class="max-w-xl px-4 mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
          <div>
            <div class="mt-6">
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                Better understand your customers
              </h2>
              <p class="mt-4 text-lg text-gray-500">
                Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.
              </p>
              {{-- <div class="mt-6">
                <a href="#" class="inline-flex px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                  Get started
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
          <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
            <img class="w-full shadow-xl rounded-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/inbox-app-screenshot-2.jpg" alt="Customer profile user interface">
          </div>
        </div>
      </div>
    </div> --}}

  </div>
</div>
