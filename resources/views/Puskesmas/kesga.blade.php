<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN KESGA PUSKESMAS') }}
    </x-slot>
    
    <x-card>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1AuX7x-LQa6TYiFrzhvGZ0vyTKfHKaZ7Q1X2avsHvP9o/edit#gid=1194989293&amp;headers=false"></iframe>
        </div>
    </x-card>

</x-app-layout>
@include('Promkes.modalUpload')
