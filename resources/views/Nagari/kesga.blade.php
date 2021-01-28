<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN KESGA NAGARI') }}
    </x-slot>
    
    <x-card>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1WuTGBcMoJczlfnXZbcxQo2-TXtEQ0kmCWDdZheEDL7o/edit#gid=1538710138&amp;headers=false"></iframe>
        </div>
    </x-card>

</x-app-layout>
@include('Promkes.modalUpload')
