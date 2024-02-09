<div>
    <livewire:background>
    <livewire:content :event="$this->events" wire:key="{{$event}}"/>
    <livewire:detail-content :event="$this->events" wire:key="{{$event}}"/>
    <livewire:feed-back-form/>
</div>
