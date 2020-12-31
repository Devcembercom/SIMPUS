<x-app-layout>
    <x-slot name="header">
        {{ __('Identitas K1 & K4') }}
    </x-slot>
    @include('KesgaGizi.IdentitasK1K4.table.tableK1')
    @include('KesgaGizi.IdentitasK1K4.table.tableK4')
</x-app-layout>
