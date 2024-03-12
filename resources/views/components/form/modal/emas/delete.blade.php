<form action="{{ route('emas.destroy', $emas->id) }}" method="post" id="modal-form-delete-emas-{{ $emas->id }}">
    @csrf
    @method('DELETE')
</form>
