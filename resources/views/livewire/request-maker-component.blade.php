<div>
    <form method="post">
        @csrf
        <div class="field is-grouped">
            <button class="button is-primary">Send</button>

            <div class="select">
                <select id="request-types" name="type">
                    @foreach($types as $type)
                    <option {{(session('data.type') == $type ? 'selected' : '') || old('type') !== null && old('type') == $type ?'selected' : ''}}
                    class="request-type-{{strtolower($type)}}">{{$type}}</option>
                    @endforeach
                </select>
            </div>

            <input name="url" class="input is-normal" type="text" placeholder="https://www.example.com" value="{{session('data.url') ?? old('name')}}"/>
        </div>
    </form>
</div>
