<div>
    <!-- Temporary debug output -->
    <div>Modal is currently: {{ $showModal ? 'Open' : 'Closed' }}</div>
    <div class="modal d-block" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $product->name }}</h5>

                </div>
                <div class="modal-body">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid">
                    <p>{{ $product->description }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal">Close</button>

                </div>

            </div>
        </div>
    </div>

</div>
