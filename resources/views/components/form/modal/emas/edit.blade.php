<!-- Modals add emas -->
<div id="modal-form-edit-emas-{{ $emas->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="modal-form-edit-emas-{{ $emas->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('emas.update', $emas->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-emas-{{ $emas->id }}-label">Edit emas
                        ({{ $emas->name }})</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">emas</label>
                        <input type="text" class="form-control" id="name" placeholder="emas Name"
                            name="name" value="{{ $emas->name }}">
                        <x-form.validation.error name="name" />
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="price" placeholder="emas price"
                            name="price" value="{{ $emas->price }}">
                        <x-form.validation.error name="price" />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" placeholder="Permission description" name="description">{{ $emas->description }}</textarea>
                        <x-form.validation.error name="description" />
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode"
                                name="status" value="1" @checked($emas->status)>
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