<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="turbolinks-cache-control" content="no-cache">
    <meta name="turbolinks-visit-control" content="reload">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('storage/images/245/' . $icon ) }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link href="{{ mix('css/template-guest.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <div id="app">
        {{ $slot }}
        {{--  @captcha  --}}
    </div>

    <script src="{{ mix ('js/template-guest.js') }}"> </script>
</body>

</html>
