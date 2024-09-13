<div>
    <form wire:submit.prevent="sendRequest">
        @csrf
        <div class="field is-grouped is-align-items-start">
            <button class="button is-primary" type="submit">Send</button>

             <div class="control">
                <div class="select">
                    <select name="type" wire:model="type" id="request-types">
                        @foreach($types as $type)
                            <option {{(session('type') == $type ? 'selected' : '')}} class="request-type-{{strtolower($type)}}">
                                {{$type}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="control is-flex is-flex-direction-column is-expanded">
                <input name="url" wire:model="url" class="input @error('url') is-danger @enderror" type="text" placeholder="https://www.example.com" value="{{session('data.url') ?? old('url')}}"/>
                @error('url')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>
        </div>
    </form>
</div>
