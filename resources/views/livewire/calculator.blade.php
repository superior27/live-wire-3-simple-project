<form wire:submit='calculate'>
    <x-text-input 
        placeholder="first number" 
        wire:model="n1"
        wire:keydown.7='not7'
    />
    <select wire:model='operator'class="text-red-800">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <x-text-input placeholder="second number" wire:model="n2"/>
    <x-primary-button type='submit'>
        Calculate
    </x-primary-button>

    <br>
    <br>

    Result: {{$result}}
</form>
