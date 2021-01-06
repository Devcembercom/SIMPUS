<x-app-layout>
    <x-slot name="header">
        {{ __('Identitas Persalinan') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('identitas-persalinan.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>
        <div id="spreadsheet"></div>
    </x-card>
    @push('js')
    <script>
        var data = [
        ['Hipertensi ', ''],
        ['Hipertensi ', ''],
        ['Hipertensi ', ''],
        ];
        
        table = jexcel(document.getElementById('spreadsheet'), {
            data:data,
            columns: [
                {
                    type: 'text',
                    title:'A.PTM',
                    width:120
                },
                {
                    type: 'text',
                    title:'ICD X',
                    width:120
                },
                {
                    type: 'text',
                    title:'B',
                    width:30
                },
                {
                    type: 'text',
                    title:'L',
                    width:30
                },
                {
                    type: 'text',
                    title:'KK',
                    width:30
                },
            ],
            nestedHeaders:[
                [
                    {
                        title: 'Kelompok Umur',
                        colspan: '40',
                    },
                ],
                [
                    {
                        title: 'Nama Penyakit',
                        colspan: '1',
                    },
                    {
                        title: ' ',
                        colspan: '1'
                    },
                   
                    {
                        title: '0-7 hari',
                        colspan: '3',
                    },
                ],
            ],
            
            
            columnDrag:true,
            license: '39130-64ebc-bd98e-26bc4',
        });
    </script>
    @endpush
</x-app-layout>
