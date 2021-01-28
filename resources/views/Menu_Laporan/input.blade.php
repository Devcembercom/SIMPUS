<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    <x-card>
        <form method="POST" action="{{ route('menu.tambah') }}" class="needs-validation"
        novalidate="">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Nama Jorong</label>
                <select name="jorong_id" class="form-control select2">
                    @foreach ($jorong as $data)
                        <option value="{{$data->id}}">{{$data->jorong}}</option>
                    @endforeach                    
                </select>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="laporan">Nama Laporan</label>
                <input id="laporan" type="text" class="form-control" name="laporan">
                <x-input-error for="laporan" />
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="link">Link</label>
                <input id="link" type="url" class="form-control" name="link">
                <x-input-error for="link" />
            </div>
        </div>
        <div class="card-footer text-right">
        <button class="btn btn-primary">Submit</button>
        </div>
</form>
    </x-card>

</x-app-layout>
