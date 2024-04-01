<!-- Modals add category -->
<div id="modal-form-edit-category-{{ $category->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="modal-form-edit-category-{{ $category->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-category-{{ $category->id }}-label">Edit category
                        ({{ $category->name }})</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="name" placeholder="category" name="name"
                            value="{{ $category->name }}">
                        <x-form.validation.error name="name" />
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type='file' onchange="readEditURL(this, 'edit{{ $category->id }}');" name="image" />
                        <br>
                        <img id="edit{{ $category->id }}" src="{{ asset('images/categories/' . $category->image) }}"
                            alt="your image" />
                        <x-form.validation.error name="image" />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" placeholder="Permission description" name="description">{{ $category->description }}</textarea>
                        <x-form.validation.error name="description" />
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode"
                                name="status" value="1" @checked($category->status)>
                        </div>
                        <x-form.validation.error name="status" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
