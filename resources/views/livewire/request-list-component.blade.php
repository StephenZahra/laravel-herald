<div>
    <div id="dropdown-btn-new" class="dropdown mt-1 ml-1" style="display: block !important; width: fit-content;">
        <div class="dropdown-trigger">
            <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu1">
                <span>New</span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu1" role="menu">
            <div id="new-items" class="dropdown-content">
                <a wire:click="create('folder')" class="dropdown-item">Folder</a>
                <a wire:click="create('request')" class="dropdown-item">Request</a>
            </div>
        </div>
    </div>

    <div>
        @if(!empty($requests))
            <div class="grid">
                @foreach($requests as $request)
                    <div class="item" data-id="{{$request['unique_name']}}">
                        @if(!array_key_exists('type', $request))
                            @include('blade.folder-component', ['folder' => $request, 'colours' => $colours])
                        @else
                            @include('blade.request-component', ['request' => $request, 'colours' => $colours])
                        @endif
                   </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
