<a aria-label="anchor" 
   href="javascript:void(0);" 
   class="ti-btn btn-wave ti-btn-icon ti-btn-sm ti-btn-danger" 
   onclick="event.preventDefault(); showDeleteConfirmation('هل أنت متأكد أنك تريد حذف هذا العنصر؟', '{{ $item->id }}');">
   <i class="las la-trash"></i>
</a>

<form id="delete-form-{{ $item->id }}" 
      action="{{ route('admin.' . $table . '.destroy', ['id' => $item->id]) }}" 
      method="POST" 
      style="display: none;">
    @csrf
    @method('DELETE')
</form>
