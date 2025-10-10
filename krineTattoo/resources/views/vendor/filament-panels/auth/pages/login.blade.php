<x-filament-panels::page.simple>
    {{ $this->form }}
    
    <x-filament-panels::form.actions 
        :actions="$this->getCachedFormActions()" 
        :full-width="$this->hasFullWidthFormActions()" 
    />
</x-filament-panels::page.simple>