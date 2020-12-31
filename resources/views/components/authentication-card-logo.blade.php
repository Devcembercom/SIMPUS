<div>
    @php
    $icon = App\Models\Settings::where('name', 'site_logo')->first()->val
    @endphp
    <img src="{{ asset('storage/images/245/'.$icon) }}" alt="logo" width="100" class="shadow-light rounded-circle">
</div>
