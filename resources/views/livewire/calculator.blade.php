<form wire:submit.throttle.1s='calculate'>
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
        <span wire:loading.class='hidden' wire:target='calculate'>
            Calculate            
        </span>
        <span wire:loading wire:target='calculate'>
            Calculating...
        </span>
    </x-primary-button>

    <br>
    <br>
    
    <span 
        wire:loading 
        class="italic font-bold text-blue-500"
        wire:target='calculate'
    >
        Now Loading... Waiting!!!        
    </span>
    
    <br>
    <br>

    Result: {{$result}}
</form>
