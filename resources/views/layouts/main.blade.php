<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <title>Laravel</title>

        <!-- Fonts -->

<style>
    *{
        margin:0;
        padding:0;
    }
</style>
    
    </head>
   <body>
    <x-navigation-menu />
 <main class="container pt-4">


    @yield('content')


    @yield('fim')
 </main>
   </body>
</html>
