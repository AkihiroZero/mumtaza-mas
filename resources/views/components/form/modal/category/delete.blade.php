<form action="{{ route('category.destroy', $category->id) }}" method="post"
    id="modal-form-delete-category-{{ $category->id }}">
    @csrf
    @method('DELETE')
</form>
