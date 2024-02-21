<div>
  <!-- row content -->
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900 uppercase underline decoration-solid decoration-1 underline-offset-8 @if($this->status == 'Upcoming') decoration-sky-500 @elseif($this->status == 'Active') decoration-red-700 @else decoration-stone-600 @endif">{{$headline}}</h2>
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
      @foreach($this->item as $event)
      <article 
      href="/event/{{$event->slug}}"
      wire:navigate
      class="cursor-pointer flex max-w-xl flex-col items-start justify-between border border-slate-400 rounded-lg p-5 group hover:scale-105  hover:border-2 transition-all hover:shadow-lg bg-opacity-50 shadow-lg hover:from-white @if($this->status == 'Upcoming') hover:border-sky-500 @elseif($this->status == 'Active') hover:border-red-700 @else hover:border-stone-600 @endif">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-19" class="text-gray-500">{{$event->eventDate}}</time>
          <div x-data="{ slug: ''}" x-init="slug='{{$event->slug}}'.substring(0, 20)" x-text="slug" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 line-clamp-3 group-hover:bg-sky-700 group-hover:text-white">
          </div>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900">
            <div href="#">
              <span class="absolute inset-0"></span>
              {{$event->eventName}}
            </div>
          </h3>
          <p @php $closingPtagPosition=strpos($event->excerpt, '</p>');
          $truncatedContent = $closingPtagPosition !== false
          ? substr($event->excerpt, 0, $closingPtagPosition + 4)
          : $event->excerpt;
          @endphp
          class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
          {!! $truncatedContent !!}
          </p>
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