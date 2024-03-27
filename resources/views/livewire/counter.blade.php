<div>
    <div>
        Counter: {{$counter}}
    </div>
    <x-primary-button wire:click="count">
        +1
    </x-primary-button>
    <br>
    <br>

    <x-text-input wire:model.live='firstName'/>
    <x-primary-button wire:click='refresh'>Refresh</x-primary-button>

    <br>
    <br>

    <div x-data="">
        LastName From Wire Element: <span x-text="$wire.lastName"></span>
        <x-secondary-button @click="$wire.set('lastName', 'Jery')">Best Lastname</x-secondary-button>
    </div>

    <br>
    <br>
    Name: {{$this->fullName}}

</div>