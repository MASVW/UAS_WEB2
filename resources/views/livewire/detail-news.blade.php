<div>
  <!-- row content -->
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8" id="{{$headline}}">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">{{$headline}}</h2>
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
      @foreach($this->item as $event)
      <article class="flex max-w-xl flex-col items-start justify-between border border-slate-400 rounded-lg p-5 group hover:scale-110 transition hover:bg-sky-400">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-19" class="text-gray-500 group-hover:text-white">{{$event->eventDate}}</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 line-clamp-3 group-hover:bg-gray-100">{{$event->slug}}</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 group-hover:text-white">
            <a href="#">
              <span class="absolute inset-0"></span>
              {{$event->eventName}}
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 group-hover:text-white">{!!$event->eventDesc!!}</p>
        </div>
      </article>
      @endforeach
    </div>
    @if($this->item->links())
    <div class="mt-10">
      {{$this->item->links(data: ['scrollTo' => false])}}
    </div>
    @endif
  </div>
  <!-- end of row content -->
</div>