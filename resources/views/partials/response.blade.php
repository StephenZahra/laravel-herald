@if(session('resp') !== null)
    <textarea readonly class="mt-4 textarea" style="resize: none;" rows="15">{{session('resp')}}</textarea>
@else
    <textarea readonly class="mt-4 textarea" style="resize: none;" rows="15"></textarea>
@endif
