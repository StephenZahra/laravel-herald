<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Herald</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        @livewireStyles
    </head>
    <body>
        <livewire:herald-page />

         @livewireScripts
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
