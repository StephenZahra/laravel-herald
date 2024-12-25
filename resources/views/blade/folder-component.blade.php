<div data-id="{{$folder['unique_name']}}" class="folder request-item folder-container item-content">
    <div class="folder-toggle">
        <span class="icon-text" style="width: inherit; display: flex; justify-content: space-between; align-items: center;">
            <span style="color: #ffffff; font-family: math;">
                {{$folder['name']}}
            </span>

            <div class="dropdown is-right mr-1 dropdown-options" dropdown-id="{{$folder['unique_name']}}">
                <div class="dropdown-trigger">
                    <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu2">
                        <span class="icon"><i class="fas fa-gear gear-ico"></i></span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu2" role="menu">
                    <div class="dropdown-content">
                        <a class="dropdown-item">Move to Folder</a>
                    </div>
                </div>
            </div>
        </span>
    </div>
    @if(optional($folder)->requests)
        <div class="nested-items is-hidden" parent-id="{{$folder['unique_name']}}">
            @foreach($folder->requests as $request)
                <div class="item" data-id="{{$request['unique-name']}}">
                    @if(array_key_exists('type', $request))
                        @include('blade.request-component', ['parent' => $folder, 'request' => $request, 'colours' => $colours])
                    @else
                        @include('blade.folder-component', ['parent' => $folder, 'folder' => $request, 'colours' => $colours])
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>
