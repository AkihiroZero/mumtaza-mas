@extends('layouts.dashboard.app')

@section('title', 'Emas Management')

@section('breadcrumb')
    <x-dashboard.breadcrumb title="emas" page="emas Management" active="emas" route="{{ route('emas.index') }}" />
@endsection

@section('content')
    <div class="card card-height-100 table-responsive">
        <!-- cardheader -->
        <div class="card-header border-bottom-dashed align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Emas</h4>
            <div class="dropdown topbar-head-dropdown header-item">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-search fs-22"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">
                    <form class="p-3" action="{{ route('emas.index') }}" method="get">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." {{ request('search') }}
                                    aria-label="Recipient's username" name="search">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="flex-shrink-0">
                <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#modal-form-add-emas">
                    <i class="ri-add-line"></i>
                    Add
                </button>
            </div>
        </div>
        <!-- end cardheader -->
        <!-- Hoverable Rows -->
        <table class="table table-hover table-nowrap mb-0">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Barcode</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Level</th>
                    <th scope="col">Kadar</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Description</th>
                    <th scope="col">Tambahan Keramik</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="col-1"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($emass as $emas)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $emas->name }}</td>
                        <td>{{ $emas->barcode }}</td>
                        <td>{{ $emas->weight }}</td>
                        <td>{{ $emas->Level->name }}</td>
                        <td>{{ $emas->Kadar->name }}</td>
                        <td>{{ $emas->Category->name }}</td>
                        <td>{{ $emas->color }}</td>
                        <td><img src="{{ asset('images/emas/' . $emas->image) }}" width="50" alt=""></td>
                        <td>{{ strlen($emas->description) > 55 ? substr($emas->description, 0, 55) . '...' : $emas->description }}
                        </td>
                        <td>
                            @if ($emas->bahan_keramik)
                                <span class="badge badge-soft-success">Tambahan Keramik</span>
                            @else
                                <span class="badge badge-soft-danger">Tanpa Keramik</span>
                            @endif
                        </td>
                        <td>
                            @if ($emas->status)
                                <span class="badge badge-soft-success">Tersedia</span>
                            @else
                                <span class="badge badge-soft-danger">Terjual</span>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="ri-more-2-fill"></i>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#modal-form-edit-emas-{{ $emas->id }}">
                                            Edit
                                        </a>
                                    </li>
                                    <li>

                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('modal-form-delete-emas-{{ $emas->id }}').submit()">
                                            Delete
                                        </a>
                                    </li>
                                </ul>

                                @include('components.form.modal.emas.edit')
                                @include('components.form.modal.emas.delete')
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="8" class="text-center">No data to display</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="card-footer py-4">
            <nav aria-label="..." class="pagination justify-content-end">
                {{ $emass->links() }}
            </nav>
        </div>
    </div>

    @include('components.form.modal.emas.add')
@endsection
