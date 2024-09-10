<div>
    <div class="columns is-gapless">
        <div id="request-panel" class="column is-2">
            <div id="dropdown-btn-new" class="dropdown mt-1 ml-1">
                <div class="dropdown-trigger">
                    <button class="btn-new button is-small" aria-haspopup="true" aria-controls="dropdown-menu3">
                        <span>New</span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                    <div id="new-items" class="dropdown-content">
                        <a href="#" class="dropdown-item">Request</a>
                        <a href="#" class="dropdown-item">Folder</a>
                    </div>
                </div>
            </div>
            @if(!empty($requests))
                @foreach($requests as $request)
                    @livewire('request-list-component', ['request' => $request, 'colours' => $colours])
                @endforeach
            @else
                <p>You have no requests</p>
            @endif
        </div>
        <div class="column is-flex is-flex-direction-column">
            <div id="request-making-panel" class="column">
                @livewire('request-maker-component')
            </div>

            <div id="response-panel" class="column">
                @include('partials.response', ['resp' => $resp])
            </div>
        </div>
    </div>
</div>
