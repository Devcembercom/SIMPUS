<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN GANGGUAN JIWA TAHUN 2021') }}
    </x-slot>
    <x-slot name="button">
       
    </x-slot>
    <x-card>

        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/12a-8sBEvKYXOAmPIEEvGdc_1uTtfFiF4U1_b_OTenS4/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    @endpush
</x-app-layout>
