<x-app-layout>
    <x-slot name="header">
        {{ __('Identitas K1 & K4') }}
    </x-slot>
    @include('KesgaGizi.IdentitasK1K4.table.tableK1')
    @include('KesgaGizi.IdentitasK1K4.table.tableK4')

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
