<article @php(post_class('flex flex-col overflow-hidden transition duration-200 rounded shadow-lg hover:shadow-xl'))>


    <div class="flex-shrink-0">
      <img class="object-cover w-full h-48" src="{!! ($thumb = get_the_post_thumbnail_url()) ? $thumb : $feat !!}" alt="">
    </div>
    <div class="flex flex-col justify-between flex-1 p-6 bg-white">
      <div class="flex-1">
        <a href="{{ $event->output("#_EVENTURL") }}" class="block group">
          <p class="mb-2 text-xl font-semibold text-gray-900 lg:text-2xl group-hover:text-green-700">
            {!! $event->output("#_EVENTNAME") !!}
          </p>
          <div class="text-lg font-medium text-gray-500">{{ $event->output("#_LOCATIONNAME") }}</div>
          <div class="text-gray-500">{{ $event->output("#_EVENTDATES") }}</div>
          <div class="text-gray-500">{{ $event->output("#_EVENTTIMES") }}</div>
        </a>
      </div>
      
    </div>

</article>
