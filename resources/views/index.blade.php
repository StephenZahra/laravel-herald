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
                    <form method="post" action="{{route('send')}}">
                        @csrf
                        <div class="field is-grouped">
                            <button class="button is-primary">Send</button>

                            <div class="select">
                                <select id="request-types" name="type">
                                    @foreach($types as $type)
                                        <option {{ session('data.type') == $type ? 'selected' : ''}} class="request-type-{{strtolower($type)}}">{{$type}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <input name="url" class="input is-normal" type="text" placeholder="https://www.example.com" value="{{session('data.url') ?? old('name')}}"/>
                        </div>
                    </form>
                </div>

                <div id="response-panel" class="column">
                    @include('partials.response', ['resp' => $resp])
                </div>
            </div>
        </div>
    </body>
</html>
