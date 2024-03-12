<form action="{{ route('level.destroy', $level->id) }}" method="post" id="modal-form-delete-level-{{ $level->id }}">
    @csrf
    @method('DELETE')
</form>
