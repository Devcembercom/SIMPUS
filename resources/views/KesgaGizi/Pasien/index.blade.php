<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN IDENTITAS PASIEN PTM ( DM DAN HIPERTENSI) TAHUN 2021	') }}
    </x-slot>
    <x-slot name="button">
       
    </x-slot>
    <x-card>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1AUCgEL1WZlCWyR0uYOEuXhFLFxbI7Wn53m8HTd-K4sk/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    @endpush
</x-app-layout>
