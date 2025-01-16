<label class="custom-switch form-switch mb-0">
    <input type="checkbox" name="custom-switch-radio" class="custom-switch-input" data-entity-type="{{ $entityType }}"
        data-entity-id="{{ $entityId }}" {{ $status == 'active' ? 'checked' : '' }}>
    <span class="custom-switch-indicator"></span>
</label>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const switchInput = document.querySelector(`input[data-entity-id="{{ $entityId }}"]`);

        switchInput.addEventListener('change', function() {
            const entityType = this.dataset.entityType;
            const entityId = this.dataset.entityId;
            const status = this.checked ? 'active' : 'blocked';

            fetch('{{ $ajaxUrl }}', {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                    body: JSON.stringify({
                        id: entityId,
                        status: status,
                        entity_type: entityType,
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.warning) {
                        $.growl.warning1({
                            title: 'Warning',
                            message: data.warning
                        });
                    } else {
                        $.growl.notice1({
                            title: 'Success',
                            message: data.message
                        });
                    }
                })
                .catch(error => {
                    $.growl.error1({
                        title: 'Error',
                        message: 'An error occurred while updating status.'
                    });
                });
        });
    });
</script>
