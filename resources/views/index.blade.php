<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Herald</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="columns is-gapless">
            <div id="request-panel" class="column is-2">
                @if(!empty($requests))
                    @foreach($requests as $request)
                        @include('partials.request', ['requests' => $requests, 'colours', $colours])
                    @endforeach
                @else
                    <p>You have no requests</p>
                @endif
            </div>
            <div class="column is-flex is-flex-direction-column">
                <div id="request-making-panel" class="column">
                    <div class="field is-grouped">
                        <button class="button is-primary">Send</button>

                        <div class="select">
                            <select id="request-types">
                                <option class="request-type-get">GET</option>
                                <option class="request-type-post">POST</option>
                                <option class="request-type-put">PUT</option>
                                <option class="request-type-patch">PATCH</option>
                                <option class="request-type-delete">DELETE</option>
                                <option class="request-type-head">HEAD</option>
                                <option class="request-type-options">OPTIONS</option>
                            </select>
                        </div>

                        <input class="input is-normal" type="text" placeholder="https://www.example.com"/>
                    </div>
                </div>

                <div id="response-panel" class="column">
                    <textarea class=" mt-4 textarea" placeholder="The request result will appear here" rows="15"></textarea>
                </div>
            </div>
        </div>
    </body>
</html>
