<!-- Modals add menu -->
<div id="modal-form-add-emas" class="modal fade" tabindex="-1" aria-labelledby="modal-form-add-emas-label"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('emas.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-add-emas-label">Add Emas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Emas</label>
                        <input type="text" class="form-control" id="name" placeholder="emas Name"
                            name="name">
                        <x-form.validation.error name="name" />
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Barcode</label>
                        <input type="text" class="form-control" id="barcode" placeholder="Masukan Barcode"
                            name="barcode">
                        <x-form.validation.error name="barcode" />
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Berat</label>
                        <input type="text" class="form-control" id="weight" placeholder="emas weight"
                            name="weight">
                        <x-form.validation.error name="weight" />
                    </div>

                    <div class="mb-3">
                        <label for="level_emas_id" class="form-label">level</label>
                        <select class="form-control" id="level_emas_id" name="level_emas_id" data-choices
                            data-choices-removeItem>
                            @foreach ($levels as $level)
                                @if (!blank($level->name))
                                    <option value="{{ $level->id }}">{{ $level->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-form.validation.error name="level_emas_id" />
                    </div>

                    <div class="mb-3">
                        <label for="kadar_emas_id" class="form-label">kadar</label>
                        <select class="form-control" id="kadar_emas_id" name="kadar_emas_id" data-choices
                            data-choices-removeItem>
                            @foreach ($kadars as $kadar)
                                @if (!blank($kadar->name))
                                    <option value="{{ $kadar->id }}">{{ $kadar->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-form.validation.error name="kadar_emas_id" />
                    </div>

                    <div class="mb-3">
                        <label for="category_emas_id" class="form-label">category</label>
                        <select class="form-control" id="category_emas_id" name="category_emas_id" data-choices
                            data-choices-removeItem>
                            @foreach ($categories as $category)
                                @if (!blank($category->name))
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        <x-form.validation.error name="category_emas_id" />
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Warna Emas</label>
                        <select class="form-control" id="color" name="color" data-choices data-choices-removeItem>
                            <option value="Kuning">Kuning</option>
                            <option value="Putih">Putih</option>
                            <option value="Hitam">Hitam</option>
                            <option value="Hijau">Hijau</option>
                            <option value="Pink">Pink</option>
                            <option value="Ungu">Ungu</option>
                            <option value="Merah">Merah</option>
                        </select>
                        <x-form.validation.error name="color" />
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type='file' onchange="readURL(this);" name="image" />
                        <img id="add-image" src="http://placehold.it/180" alt="your image" />
                        <x-form.validation.error name="image" />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" id="description" placeholder="emas description" name="description"></textarea>
                        <x-form.validation.error name="description" />
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="bahan_keramik" class="form-label">Bahan Keramik</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode"
                                name="bahan_keramik" value="1">
                        </div>
                        <x-form.validation.error name="bahan_keramik" />
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode"
                                name="status" value="1" checked>
                        </div>
                        <x-form.validation.error name="status" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Save</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
