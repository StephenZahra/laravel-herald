<div>
    @if(isset($response))
        <p class="has-text-right is-size-6">{{$status}}</p>
        <textarea readonly class="mt-4 textarea" style="resize: none;" rows="15">{{$response}}</textarea>
    @else
        <p class="has-text-right is-size-6"><br></p>
        <textarea readonly class="mt-4 textarea" style="resize: none;" rows="15">Make a request to get started...</textarea>
    @endif
</div>
