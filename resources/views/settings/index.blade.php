<x-app-layout>
    <x-slot name="header">
        {{ __('General Settings') }}
    </x-slot>
    <div id="output-status"></div>
    <div class="row">
        <div class="col-md-4">
            <x-card>
                <x-slot name="title">
                    {{ __('Jump To') }}
                </x-slot>

                <ul class="nav nav-pills flex-column">
                    <li class="nav-item"><a href="{{ route('settings.index',['tab' => 'general']) }}"
                            class="nav-link @if(request()->tab == 'general') active @endif">{{ __('General') }}</a></li>
                    <li class="nav-item"><a href="{{ route('settings.index',['tab' => 'nagari']) }}"
                            class="nav-link @if(request()->tab == 'nagari') active @endif">{{ __('Nagari') }}</a></li>
                </ul>

            </x-card>
        </div>
        <div class="col-md-8">
            @if (request()->tab == 'general')
            @include('settings.form.general')
            @elseif(request()->tab == 'nagari')
            @include('settings.form.nagari')
            @endif
        </div>
    </div>
</x-app-layout>
@include('settings.form.modalAddNagari')
