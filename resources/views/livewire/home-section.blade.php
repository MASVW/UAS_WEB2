<div>
    <livewire:background />
    <livewire:content :event="$this->events" wire:key="{{$this->events}}" />
    <livewire:detail-content :event="$this->events" wire:key="{{$this->events}}" />
    <livewire:feed-back-form />
    <livewire:background />
</div>