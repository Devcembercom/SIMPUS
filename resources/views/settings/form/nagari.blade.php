<form action="{{ route('settings.updateGeneral') }}" method="post" enctype="multipart/form-data">
    @csrf
    <x-card>
        <x-slot name="title"> {{ __('Daftar Nagari') }} </x-slot>
        <a href="javascript:" class="float-right btn btn-success" data-target="#modalAddNagari" data-toggle="modal"
            data-placement="bottom" title="" data-original-title="Add Nagari">
            {{ __('Add Nagari') }}</a>
        <div class="table-responsive">
            <table class="table table-light">
                <thead align="center">
                    <tr>
                        <td>{{ __('No') }}</td>
                        <td>{{ __('Nagari') }}</td>
                        <td>{{ __('Created At') }}</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody align="center">
                    @forelse ($datas as $data => $dat)
                    <tr>
                        <td>{{$data + $datas->firstItem() }}</td>
                        <td>{{$dat->nama }}</td>
                        <td>
                            <a href="{{route('settings.deleteNagari',$dat->id)}}" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $datas->links() }}
        </div>
    </x-card>
</form>

