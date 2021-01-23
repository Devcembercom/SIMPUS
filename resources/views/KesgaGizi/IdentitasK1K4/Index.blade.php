<x-app-layout>
    <x-slot name="header">
        {{ __('Identitas K1 & K4') }}
    </x-slot>
    {{-- @include('KesgaGizi.IdentitasK1K4.table.tableK1')
    @include('KesgaGizi.IdentitasK1K4.table.tableK4') --}}
    <x-slot name="button">
        <a href="{{ route('list.fileK1K4',['nagari' => request()->nagari]) }}" class="float-right btn btn-primary"><i class="fa fa-list"></i>
            {{ __('list File K1 & K4') }}</a>
        <a href="javascript:" class="float-right btn btn-success" data-target="#modalUpload" data-toggle="modal"
            data-placement="bottom" title="" data-original-title="Upload File"><i class="fa fa-file-excel"></i>
            {{ __('Upload File') }}</a>
    </x-slot>
    <x-card class="card-primary">
        <x-slot name="title">{{ __('Identitas K1') }}</x-slot>
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
@include('KesgaGizi.IdentitasK1K4.modalUpload')
