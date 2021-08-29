<article @php(post_class('relative'))>
  <div class="relative pt-12 pb-24 overflow-hidden lg:pt-16 lg:pb-32">
    <div class="relative px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-prose">
        <h1 class="mb-4">
          <span class="block mt-2 text-3xl font-extrabold leading-8 tracking-tight text-center text-gray-900 sm:text-4xl">{!! $title !!}</span>
        </h1>
        <div class="flex flex-col justify-center space-y-1 text-center lg:mb-4 lg:text-lg">
          <div class="font-semibold text-green-600">{!! $cats !!}</div>
          <div class="text-gray-600 ">{{ get_the_date('') }}</div>
        </div>
        <div class="mx-auto mt-6 prose prose-lg text-gray-700 prose-green-600">
          {!! get_the_content() !!}
        </div>
      </div>
    </div>
  </div>
</article>