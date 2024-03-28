<form wire:submit='save' class='flex flex-col gap-4'>
    
    <div>
        <x-text-input placeholder="User Name" wire:model.blur="name"/>
        @error('name') <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div> @enderror
    </div>

    
    <div>
        <x-text-input placeholder="Email" wire:model.blur="email" type='email'/>
        @error('email') <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div> @enderror
    </div>
    
    
    <div>
        <x-text-input placeholder="Password" wire:model.blur="password" type='password'/>
        @error('password') <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div> @enderror
    </div>

    <div>
        <x-text-input placeholder="Password Confirmation" wire:model.blur="password_confirmation" type='password'/>
    </div>
    
    <div>
        <x-primary-button>
            Save
        </x-primary-button>  
    </div>
    
</form>
