<x-app-layout>
    <x-slot name="header">
        {{ __('LB 3 LANSIA') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('lap-bayi.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1Rr6NE8tM1YdQT3fbsyrp1JSUNNAv0pBpHyXSZe5t-oI/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    @endpush
</x-app-layout>
