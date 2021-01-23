<div>
    <x-modal tabindex="-1" role="dialog" class="modal" id="modalAddNagari">
        <x-slot name="title">
            {{ __( 'Add Nagari') }}
        </x-slot>
        <x-slot name="content">
            <form action="{{ route('settings.addNagari') }}" method="post">
                @csrf
                <div class="form-group">
                    <x-label for="nagari">{{ __('Nama Nagari') }}</x-label>
                    <x-input id="nagari" class="{{ $errors->has('nagari') ? ' is-invalid' : '' }}" type="text"
                        name="nagari" value="{{ old('nagari') }}" required />
                    <x-input-error for="nagari" />
                </div>
                <button type="submit" class="float-right btn btn-success">{{ __('Submit') }}</button>
            </form>
        </x-slot>
        <x-slot name="footer">
    </x-modal>
</div>
