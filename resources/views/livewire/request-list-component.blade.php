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
                <div class="request">
                    <span class="icon-text" style="width: inherit; display: flex; justify-content: space-between; align-items: center;">
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
                                <div id="item-options" class="dropdown-content">
                                    <a class="dropdown-item">Move to Folder</a>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
            @else
                <div class="request">
                    <span class="icon-text" style="width: inherit; display: flex; align-items: center;">
                        <span style="font-size: 12px; font-family: system-ui;"><strong class="{{$colours[$request->type]}}">{{$request->type}}</strong></span>

                        <span style="display: flex; justify-content: space-between; flex-grow: 1; align-items: center;">
                            <span style="color: #ffffff; font-family: math;">{{$request->name}}</span>

                            <div class="dropdown is-right mr-1 init-hide dropdown-options" dropdown-id="{{$request->id}}">
                                <div class="dropdown-trigger">
                                    <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu3">
                                        <span class="icon"><i class="fas fa-gear gear-ico"></i></span>
                                    </button>
                                </div>
                                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                                    <div id="item-options" class="dropdown-content">
                                        <a class="dropdown-item">Move to Folder</a>
                                    </div>
                                </div>
                            </div>
                        </span>
                    </span>
                </div>
            @endif
        @endforeach
    @endif
</div>
