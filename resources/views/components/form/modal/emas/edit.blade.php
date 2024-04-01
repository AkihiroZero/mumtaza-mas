<!-- Modals add emas -->
<div id="modal-form-edit-emas-{{ $emas->id }}" class="modal fade" tabindex="-1"
    aria-labelledby="modal-form-edit-emas-{{ $emas->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('emas.update', $emas->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-emas-{{ $emas->id }}-label">Edit emas
                        ({{ $emas->name }})</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Emas</label>
                        <input type="text" class="form-control" id="name" placeholder="Emas" name="name"
                            value="{{ $emas->name }}">
                        <x-form.validation.error name="name" />
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Barcode</label>
                        <input type="text" class="form-control" id="Barcode" placeholder="Masukan Barcode"
                            name="barcode" value="{{ $emas->barcode }}">
                        <x-form.validation.error name="barcode" />
                    </div>

                    <div class="mb-3">
                        <label for="weight" class="form-label">Berat</label>
                        <input type="text" class="form-control" id="weight" placeholder="Berat Emas"
                            name="weight" value="{{ $emas->weight }}">
                        <x-form.validation.error name="weight" />
                    </div>

                    <div class="mb-3">
                        <label for="level" class="form-label">Level Emas</label>
                        <select class="form-control" id="level" name="level_emas_id" data-choices
                            data-choices-removeItem>
                            @foreach ($levels as $level)
                                <option @selected($emas->level_emas_id == $level->id) value="{{ $level->id }}">
                                    {{ $level->name }}</option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="level_emas_id" />
                    </div>

                    <div class="mb-3">
                        <label for="kadar" class="form-label">Kadar Emas</label>
                        <select class="form-control" id="kadar" name="kadar_emas_id" data-choices
                            data-choices-removeItem>
                            @foreach ($kadars as $kadar)
                                <option @selected($emas->kadar_emas_id == $kadar->id) value="{{ $kadar->id }}">
                                    {{ $kadar->name }}</option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="kadar_emas_id" />
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">category Emas</label>
                        <select class="form-control" id="category" name="category_emas_id" data-choices
                            data-choices-removeItem>
                            @foreach ($categories as $category)
                                <option @selected($emas->category_emas_id == $category->id) value="{{ $category->id }}">
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        <x-form.validation.error name="category_emas_id" />
                    </div>

                    <div class="mb-3">
                        <label for="color" class="form-label">Warna Emas</label>
                        <select class="form-control" id="color" name="color" data-choices data-choices-removeItem>
                            <option value="Kuning" {{ $emas->color == 'Kuning' ? 'selected' : '' }}>Kuning</option>
                            <option value="Putih" {{ $emas->color == 'Putih' ? 'selected' : '' }}>Putih</option>
                            <option value="Hitam" {{ $emas->color == 'Hitam' ? 'selected' : '' }}>Hitam</option>
                            <option value="Hijau" {{ $emas->color == 'Hijau' ? 'selected' : '' }}>Hijau</option>
                            <option value="Pink" {{ $emas->color == 'Pink' ? 'selected' : '' }}>Pink</option>
                            <option value="Ungu" {{ $emas->color == 'Ungu' ? 'selected' : '' }}>Ungu</option>
                            <option value="Merah" {{ $emas->color == 'Merah' ? 'selected' : '' }}>Merah</option>
                        </select>
                        <x-form.validation.error name="color" />
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type='file' onchange="readEditURL(this, 'edit{{ $emas->id }}');"
                            name="image" />
                        <br>
                        <img id="edit{{ $emas->id }}" src="{{ asset('images/emas/' . $emas->image) }}"
                            alt="your image" />
                        <x-form.validation.error name="image" />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" id="description" placeholder="Permission description"
                            name="description">{{ $emas->description }}</textarea>
                        <x-form.validation.error name="description" />
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="bahan_keramik" class="form-label">Bahan Keramik</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode"
                                name="bahan_keramik" value="1" @checked($emas->bahan_keramik)>
                        </div>
                        <x-form.validation.error name="bahan_keramik" />
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
