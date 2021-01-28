<x-app-layout>
    <x-slot name="header">
        {{$data->laporan}}
    </x-slot>
    
    <x-card>
      
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="{{$data->link}}&amp;headers=false"></iframe>
        </div>
       
    </x-card>
</x-app-layout>
@include('KesgaGizi.Anemia.modalUpload')
