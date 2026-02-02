<td>
    <div class="form-check form-check-md form-switch me-2">
        <label class="form-check-label mt-0">
            <input class="form-check-input me-2 status-toggle" type="checkbox" role="switch" data-id="{{ $item->id }}"
                data-model="{{ class_basename($item) }}" {{ $item->status === 'active' ? 'checked' : '' }}>

            <span id="status-text-{{ $item->id }}">{{ $item->status === 'active' ? 'Active' : 'Inactive' }}</span>
        </label>
    </div>
</td>
<td>{{ $item->createdBy->name }}</td>