<x-card>
    <form method="POST" action="{{ route('menu.dajor.tambah') }}" class="needs-validation" novalidate="">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="jorong">Nama Jorong</label>
                <input id="jorong" type="text" class="form-control" name="jorong">
                <x-input-error for="jorong" />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-card>
