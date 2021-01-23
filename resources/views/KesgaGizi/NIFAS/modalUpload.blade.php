<div>
    <x-modal tabindex="-1" role="dialog" class="modal" id="modalUpload">
        <x-slot name="title">
            {{ __( 'Upload File Excel') }}
        </x-slot>
        <x-slot name="content">
            <form action="{{ route('NIFAS.uploadFile',['nagari' => request()->nagari]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <x-label for="fileExcel">{{ __('Upload File Excel') }}</x-label>
                    <x-input id="fileExcel" class="{{ $errors->has('fileExcel') ? ' is-invalid' : '' }}" type="file"
                        name="fileExcel" value="{{ old('fileExcel') }}" accept=".xls,.csv,.xlsx" required />
                    <x-input-error for="fileExcel" />
                </div>
                <button type="submit" class="float-right btn btn-success">{{ __('Submit') }}</button>
            </form>
        </x-slot>
        <x-slot name="footer">
    </x-modal>
</div>
