<div class="{{ $block->classes }}">
  <div class="relative pt-16 pb-20 bg-white lg:pt-24 lg:pb-28">
    <div class="relative px-6 mx-auto max-w-7xl lg:px-8">
      <div class="text-center">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          {!! $title !!}
        </h2>
        <p class="max-w-2xl mx-auto mt-3 text-xl text-gray-500 sm:mt-4">
          {!! $subtitle !!}
        </p>
      </div>

      <div class="grid max-w-lg gap-5 mx-auto mt-12 lg:mt-16 md:gap-8 lg:grid-cols-3 lg:max-w-none xl:gap-12">

        @if($posts)
        @while($posts->have_posts()) @php($posts->the_post())
        @php($id = get_the_ID())
        @include('partials.content-blog', ['id' => $id])
        @endwhile
        @endif

      </div>

    </div>
  </div>
</div>
