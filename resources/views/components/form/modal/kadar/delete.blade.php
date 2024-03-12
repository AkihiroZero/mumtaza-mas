<form action="{{ route('kadar.destroy', $kadar->id) }}" method="post" id="modal-form-delete-kadar-{{ $kadar->id }}">
    @csrf
    @method('DELETE')
</form>
