<x-app-layout>
    <x-slot name="header">
        {{ __('LAPORAN PROMKES, KESLING, PIS PK, LANSIA') }}
    </x-slot>
    <x-card>
        <div class="table-responsive absolute-center">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>{{ __('NO') }}</th>
                        <th>{{ __('DATA') }}</th>
                        <th rowspan="4">{{ __('JORONG') }}</th>
                        <th>{{ __('NAGARI') }}</th>
                    </tr>
                </thead>
            </table>
        </div>
    </x-card>

</x-app-layout>
