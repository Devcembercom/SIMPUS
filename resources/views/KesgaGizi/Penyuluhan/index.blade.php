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
                src="https://docs.google.com/spreadsheets/d/1Bw_uYzCAicPW1cMNFLQq6qcubNWW3kvXIYTHpPRNGvs/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    @endpush
</x-app-layout>
