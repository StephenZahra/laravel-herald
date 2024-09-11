<div>
    <form wire:submit.prevent="sendRequest">
        @csrf
        <div class="field is-grouped">
            <button class="button is-primary" type="submit">Send</button>

            <div class="select">
                <select wire:model="type" name="type" id="request-types">
                    @foreach($types as $type)
                        <option {{(session('data.type') == $type ? 'selected' : '') || old('type') !== null && old('type') == $type ?'selected' : ''}}
                        class="request-type-{{strtolower($type)}}">{{$type}}</option>
                    @endforeach
                </select>
            </div>

            <input wire:model="url" name="url" class="input is-normal" type="text" placeholder="https://www.example.com" value="{{session('data.url') ?? old('name')}}"/>
        </div>
    </form>
</div>
