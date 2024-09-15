<div>
    <div id="dropdown-btn-new" class="dropdown mt-1 ml-1">
        <div class="dropdown-trigger">
            <button class="btn-new button is-small" aria-haspopup="true" aria-controls="dropdown-menu3">
                <span>New</span>
            </button>
        </div>
        <div class="dropdown-menu" id="dropdown-menu3" role="menu">
            <div id="new-items" class="dropdown-content">
                <a wire:click="create('folder')" class="dropdown-item">Folder</a>
                <a wire:click="create('request')" class="dropdown-item">Request</a>
            </div>
        </div>
    </div>

    @if(!empty($requests))
        @foreach($requests as $request)
            @if($request->type == 'folder')
                <div class="request">
                    <span style="color: #ffffff; font-family: math">{{$request->name}}</span>
                </div>
            @else
                <div class="request">
                    <span style="font-size: 12px; font-family: system-ui;"><strong class="{{ $colours[$request->type] }}">{{$request->type}}</strong></span>
                    <span style="color: #ffffff; font-family: math">{{$request->name}}</span>
                </div>
            @endif
        @endforeach
    @endif
</div>
