@php $event = em_get_event(get_the_ID(), 'post_id') @endphp
<article @php(post_class('relative'))>
    <div class="relative pt-12 pb-24 overflow-hidden lg:pt-16 lg:pb-32">
      <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-prose">
          <h1 class="mb-4 lg:mb-8">
            <span class="block mt-2 text-3xl font-extrabold leading-8 tracking-tight text-center text-gray-900 sm:text-4xl">{!! $title !!}</span>
          </h1>
          <div class="lg:text-lg">
            <div class="mb-2 text-lg font-bold text-gray-700 lg:text-xl">{{ $event->output("#_EVENTDATES") }} @ {{ $event->output("#_EVENTTIMES") }}</div>
            <div class="font-medium text-gray-700">{{ $event->output("#_LOCATIONNAME") }}</div>
            <div class="text-gray-700">{{ $event->output("#_LOCATIONADDRESS") }}</div>
            <div class="text-gray-700">{{ $event->output("#_LOCATIONTOWN") }}, {{ $event->output("#_LOCATIONSTATE") }} {{ $event->output("#_LOCATIONPOSTCODE") }}</div>
          </div>
          
          <div class="mx-auto mt-6 prose prose-lg text-gray-700 prose-green-600">
            {!! get_the_content() !!}
          </div>
        </div>
      </div>
    </div>
  </article>