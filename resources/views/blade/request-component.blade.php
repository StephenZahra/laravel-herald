<div class="request request-item request-container item-content sortable-item" data-id="{{$request['unique_name']}}">
    <div class="request-toggle">
        <span class="icon-text" style="width: inherit; display: flex; align-items: center;">
            <span style="font-size: 12px; font-family: system-ui;"><strong class="{{$colours[$request['type']]}}">{{$request['type']}}</strong></span>

            <span style="display: flex; justify-content: space-between; flex-grow: 1; align-items: center;">
                <span style="color: #ffffff; font-family: math;">{{$request['name']}}</span>

                <div class="dropdown is-right mr-1 dropdown-options" dropdown-id="{{$request['unique_name']}}">
                    <div class="dropdown-trigger">
                        <button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu4">
                            <span class="icon"><i class="fas fa-gear gear-ico"></i></span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu4" role="menu">
                        <div class="dropdown-content">
                            <a class="dropdown-item">Move to Folder</a>
                        </div>
                    </div>
                </div>
            </span>
        </span>
    </div>
</div>
