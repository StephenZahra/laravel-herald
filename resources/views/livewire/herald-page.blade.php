<div>
    <div class="columns is-gapless">
        <div id="request-panel" class="column is-2">
            <livewire:request-list-component :colours="$colours"/>
        </div>

        <div class="column is-flex is-flex-direction-column">
            <div id="request-making-panel" class="column">
                <livewire:request-maker-component />
            </div>

            <div id="response-panel" class="column">
                <livewire:request-response-component listen="response-received:handleResponse" />
            </div>
        </div>
    </div>
</div>
