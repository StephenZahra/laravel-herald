<div class="request folder" folder-id="{{$request->id}}">
    <span class="folder-toggle icon-text" style="width: inherit; display: flex; justify-content: space-between; align-items: center;">
        <span style="color: #ffffff; font-family: math;">
            {{$request->name}}
        </span>

        <div class="dropdown is-right mr-1 init-hide dropdown-options" dropdown-id="{{$request->id}}">
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

    @if(isset($request->requests) && !empty($request->requests))
        <div class="nested-items is-hidden" parent-id="{{$request->id}}">
            @foreach($request->requests as $item)
                @if($item->type == 'folder')
                    <!-- Recursive call to FolderComponent -->
                    <!--<livewire:folder-component :folder="$item" />-->
                @else
                    <!-- Call to RequestComponent for requests -->
                    <livewire:request-component :request="$item" />
                @endif
            @endforeach
        </div>
    @endif
</div>
