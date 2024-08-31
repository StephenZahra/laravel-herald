<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Herald</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div id="request-panel">
            @if(!empty($requests))
                @foreach($requests as $request)
                    @include('partials.request', ['requests' => $requests, 'colours', $colours])
                @endforeach
            @else
                <p>You have no requests</p>
            @endif
        </div>
    </body>
</html>
