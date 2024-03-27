<div>
    <x-text-input placeholder="first number" wire:model="n1"/>
    <select wire:model='operator'class="text-red-800">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <x-text-input placeholder="second number" wire:model="n2"/>
    <x-primary-button wire:click='calculate'>
        Calculate
    </x-primary-button>

    <br>
    <br>

    Result: {{$result}}
</div>
