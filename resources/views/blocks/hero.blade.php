<div class="{{ $block->classes }} overflow-hidden">

  <div class="relative md:pt-8 lg:pt-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative rounded shadow-xl sm:overflow-hidden">
        <div class="absolute inset-0">
          <img class="object-cover w-full h-full" src="{!! $bg['url'] !!}">
          <div class="absolute inset-0 bg-gray-300 mix-blend-multiply"></div>
        </div>
        <div class="relative px-4 py-24 text-white sm:px-6 sm:py-24 lg:py-32 lg:px-8 xl:py-48">
          <h1 class="text-4xl font-extrabold tracking-tight text-center sm:text-5xl lg:text-6xl xl:text-7xl">
            {!! $title !!}
          </h1>
          <p class="max-w-lg mx-auto mt-4 text-xl text-center sm:max-w-3xl lg:text-2xl xl:text-3xl">
            {!! $subtitle !!}
          </p>
         
        </div>
      </div>
    </div>
  </div>
</div>
