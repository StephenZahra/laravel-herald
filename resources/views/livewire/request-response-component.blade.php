<div>
    @if($response)
        <textarea readonly class="mt-4 textarea" style="resize: none;" rows="15">{{$response}}</textarea>
    @else
        <textarea readonly class="mt-4 textarea" style="resize: none;" rows="15">Make a request to get started...</textarea>
    @endif
</div>
