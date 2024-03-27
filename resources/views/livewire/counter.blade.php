<div>
    <div>
        Counter: {{$counter}}
    </div>
    <x-primary-button wire:click="count">
        +1
    </x-primary-button>
    <br>
    <br>

    <x-text-input wire:model.live='counter'/>
    <x-primary-button wire:click='refresh'>Refresh</x-primary-button>

    <br>
    <br>
    Name: {{$firstName}} {{$lastName}}

</div>