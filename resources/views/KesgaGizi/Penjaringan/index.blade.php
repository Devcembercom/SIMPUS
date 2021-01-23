<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN LB1 DAN P2P PTMA') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('lap-bayi.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/13t4xjWHS7ULWUHO8eU4KmJwnijiGYuuvf_KTNHt_Kr4/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    @endpush
</x-app-layout>
