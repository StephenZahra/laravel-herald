<div>
    <div id="dropdown-btn-new" class="dropdown mt-1 ml-1">
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

    @if(!empty($requests))
        @foreach($requests as $request)
            @if($request->type == 'folder')
                <livewire:folder-component :folder="$request" :colours="$colours"/>
            @else
                <livewire:request-component :request="$request" :colours="$colours"/>
            @endif
        @endforeach
    @endif
</div>
