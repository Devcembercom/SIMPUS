<x-app-layout>
    <x-slot name="header">
        {{ __('List File Laporan LB1') }}
    </x-slot>
    <x-card>
        <div class="table-responsive">
            <table class="table table-light">
                <thead>
                    <tr>
                        <td>{{ __('No') }}</td>
                        <td>{{ __('Filename') }}</td>
                        <td>{{ __('Author') }}</td>
                        <td>{{ __('Created At') }}</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $dat => $data)
                    <tr>
                        <td>{{ $dat + $datas->firstItem() }}</td>
                        <td>{{ $data->filename }}</td>
                        <td>{{ $data->getUser->name }}</td>
                        <td>{{ date('d F Y H:i:s',strtotime($data->created_at)) }}</td>
                        <td>
                            <a data-turbolinks="false"
                                href="{{ route('lb1.download',['file' => $data->filename, 'author' => $data->getUser->name , 'ad' => $data->author]) }}"
                                class="btn btn-primary btn-sm">{{ __('Download') }}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="float-right">
            {{ $datas->links() }}
        </div>
    </x-card>
</x-app-layout>
