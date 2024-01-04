<?php

use Livewire\Volt\Component;

new class extends Component {
    public $counter = 0;

    public function increase()
    {
        $this->counter++;
    }

    public function decrease()
    {
        $this->counter--;
    }
}; ?>

@push('styles')
    {{-- tailwindcss --}}
    @vite('resources/css/app.css')
@endpush

<div>
    <h1 class="p-2 text-xl font-semibold text-blue-700">Hello Internet!</h1>
    <div class="flex justify-center p-4 items-center w-[300px] gap-4">
        <button wire:click='decrease'
            class="text-xl rounded-full flex select-none items-center gap-3 bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-3 text-center align-middle font-sans font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button" data-ripple-light="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
            </svg>

        </button>
        <span class="text-xl">{{ $counter }}</span>
        <button wire:click='increase'
            class="text-xl rounded-full flex select-none items-center gap-3 bg-gradient-to-tr from-pink-600 to-pink-400 py-3 px-3 text-center align-middle font-sans font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button" data-ripple-light="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>

        </button>
    </div>
</div>

@push('scripts')
    {{-- Bootstrap 5 --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script> --}}
@endpush
