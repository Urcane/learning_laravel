<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ $title ?? 'Unknown Page' }} -- To Do Apps</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>
    <div class="flex md:flex-row-reverse flex-wrap">

        <!--Main Content-->
        <div class="w-full md:w-10/12 bg-gray-100">            
        <div class="md:container bg-gray-100 pt-8 md:px-6 min-h-screen mx-8 md:mx-0">
            {{ $slot }}
        </div>

            <!--Sidebar-->
            @include('layouts.navigation-layout')
        </div>
    </div>
</body>
</html>
