<article @php(post_class('flex flex-col overflow-hidden transition duration-200 rounded shadow-lg hover:shadow-xl'))>


    <div class="flex-shrink-0">
      <img class="object-cover w-full h-48" src="{!! ($thumb = get_the_post_thumbnail_url($id)) ? $thumb : $feat !!}" alt="">
    </div>
    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
      <div class="flex-1">
        <p class="text-sm font-medium text-[#4B5320]">
          {!! $cats !!}
        </p>
        <a href="{{ get_the_permalink($id) }}" class="block group">
          <p class="text-xl font-semibold text-gray-900 lg:leading-tight lg:text-2xl group-hover:text-green-700">
            {!! get_the_title($id) !!}
          </p>
          <div class="mb-2 text-sm text-gray-500 ">{{ get_the_date('', $id) }}</div>
          <div class="mb-2 text-gray-500 entry-summary line-clamp-5 lg:mb-3">
            @php(the_excerpt($id))
          </div>
        </a>
      </div>
      
    </div>
  


</article>