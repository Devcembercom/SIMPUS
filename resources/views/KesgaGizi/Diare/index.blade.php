<x-app-layout>
    <x-slot name="header">
        {{ __('REKAPITULASI LAPORAN PENYULUHAN TAHUN 2021') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('lap-bayi.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1GTmjNnhatgpxn1UJuGyK2YtD3D8YUamfx-XdI1NSgv8/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    @endpush
</x-app-layout>
