<x-filament-panels::page.simple>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-black">
        <!-- Logo Section -->
        <div class="mb-8 text-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="K'RINE TATTOO" class="w-20 h-20 mx-auto mb-4">
            <h1 class="text-3xl font-bold text-primary-400 font-display">K'RINE TATTOO</h1>
            <p class="text-gray-400 font-body">Administration</p>
        </div>

        <!-- Login Form -->
        <div class="w-full max-w-md p-8 bg-gray-800 border border-gray-700 rounded-2xl shadow-2xl">
            <x-filament-panels::form wire:submit="authenticate">
                {{ $this->form }}

                <x-filament-panels::form.actions
                    :actions="$this->getCachedFormActions()"
                    :full-width="$this->hasFullWidthFormActions()"
                />
            </x-filament-panels::form>
        </div>

        <!-- Footer -->
        <div class="mt-8 text-center">
            <p class="text-sm text-gray-500">
                © {{ date('Y') }} K'RINE TATTOO - Salon de tatouage professionnel
            </p>
        </div>
    </div>
</x-filament-panels::page.simple>