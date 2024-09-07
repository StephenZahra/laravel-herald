@if(isset($resp))
    <textarea class=" mt-4 textarea" rows="15">
        @dd($resp)
        {{$resp}}
    </textarea>
@else
    <textarea class=" mt-4 textarea" placeholder="The request result will appear here" rows="15"></textarea>
@endif
