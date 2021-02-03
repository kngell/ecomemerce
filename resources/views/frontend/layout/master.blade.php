<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title',config('app.name'))</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="py-6 flex flex-col justify-between items-center min-h-screen">
    <main class="flex flex-col justify-center items-center">
    @yield('content')
    </main role="main">
    <footer> 
        <p class="text-gray-400">
            &copy;Copyright {{date('Y')}} &middot;
            @if(! Route::is('app_about'))
            <a href="{{route('app_about')}}" class="text-indigo-500 hover:text-indigo-600 underline">About us</a>
            @endif
        </p>  
    </footer>
</body>

</html>