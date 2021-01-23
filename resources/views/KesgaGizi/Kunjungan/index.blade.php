<x-app-layout>
    <x-slot name="header">
        {{ __('Kunjungan	') }}
    </x-slot>
    <x-slot name="button">
       
    </x-slot>
    <x-card>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1lY3bIlN1q6yZX5Pp2kVdyxAJREorFBvH1AH-IMPoWJ0/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    @endpush
</x-app-layout>
