<form wire:submit='save' class='flex flex-col gap-4'>
    
    <div>
        <x-text-input placeholder="User Name" wire:model.blur="form.name"/>
        @error('form.name') <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div> @enderror
        <div wire:dirty wire:target='form.name' class="text-sm italic font-semibold text-yellow-400">Changed, but not saved...</div>
    </div>

    
    <div>
        <x-text-input placeholder="Email" wire:model.blur="form.email" type='email'/>
        @error('form.email') <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div> @enderror
    </div>
    
    
    <div>
        <x-text-input placeholder="Password" wire:model.blur="form.password" type='password'/>
        @error('form.password') <div class="text-sm italic font-semibold text-red-400">{{ $message }}</div> @enderror
    </div>

    <div>
        <x-text-input placeholder="Password Confirmation" wire:model.blur="form.password_confirmation" type='password'/>
    </div>
    
    <div>
        <x-primary-button>
            Update
        </x-primary-button>  
    </div>
    
</form>
