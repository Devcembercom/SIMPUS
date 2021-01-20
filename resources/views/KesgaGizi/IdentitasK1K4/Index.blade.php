<x-app-layout>
    <x-slot name="header">
        {{ __('Identitas K1 & K4') }}
    </x-slot>
    {{-- @include('KesgaGizi.IdentitasK1K4.table.tableK1')
    @include('KesgaGizi.IdentitasK1K4.table.tableK4') --}}

    <x-card class="card-primary">
        <x-slot name="title">{{ __('Identitas K1') }}</x-slot>
        <a href="{{ route('createDataK1',['type' => 'k1']) }}"
            class="float-right mb-3 btn btn-primary">{{ __('Tambah Data') }}</a>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item"
                    src="https://docs.google.com/spreadsheets/d/1Yc5ZHAyo-Gv9P0nS44cCzfx8fhV9YclzXswVVpYZ2sM/edit?usp=sharing&amp;headers=false"></iframe>
            </div>
    </x-card>

    @push('js')
    <script>
        function confirmDelete(id) {
            swal({
                title: 'Are you sure?',
                text: 'Sekali dihapus, data tersebut tidak bisa dipulihkan!',
                icon: 'warning',
                buttons: true,
                showCancelButton: true,
                dangerMode: true,
            }).then((willDelete) => {
                    if (willDelete) {
                        $('#data-'+id).submit();
                    } else {
                        swal('Operation Canceled.');
                    }
                });
        }
    </script>
    @endpush
</x-app-layout>
