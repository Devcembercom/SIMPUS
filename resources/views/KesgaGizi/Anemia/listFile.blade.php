<x-app-layout>
    <x-slot name="header">
        {{ __('List File Laporan Anemia') }}
    </x-slot>
    <x-card>
        <div class="table-responsive">
            <table class="table table-light">
                <thead align="center">
                    <tr>
                        <td>{{ __('No') }}</td>
                        <td>{{ __('Filename') }}</td>
                        <td>{{ __('Author') }}</td>
                        <td>{{ __('Nagari') }}</td>
                        <td>{{ __('Created At') }}</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody align="center">
                    @forelse ($datas as $dat => $data)
                    <tr>
                        <td>{{ $dat + $datas->firstItem() }}</td>
                        <td>{{ $data->filename }}</td>
                        <td>{{ $data->getUser->name }}</td>
                        <td>{{ $data->getNagari->nama }}</td>
                        <td>{{ date('d F Y H:i:s',strtotime($data->created_at)) }}</td>
                        <td>
                            <a data-turbolinks="false"
                                href="{{ route('anemia.download',['file' => $data->filename, 'author' => $data->getUser->name , 'ad' => $data->author]) }}"
                                class="btn btn-primary btn-sm">{{ __('Download') }}</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="float-right">
            {{ $datas->links() }}
        </div>
    </x-card>
</x-app-layout>
