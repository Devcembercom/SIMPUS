<x-app-layout>
    <x-slot name="header">
        {{ __('REGISTER KOHORT KELUARGA BINAAN PERKESMAS') }}
    </x-slot>
    <x-slot name="button">
       
    </x-slot>
    <x-card>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1YduzUHq5pNnb2dobZwm3fyTY8h0HWmj2QcVfpd7DHRs/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    @endpush
</x-app-layout>
