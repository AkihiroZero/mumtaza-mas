@extends('layouts.dashboard.app')

@section('title', 'Emas Management')

@section('breadcrumb')
    <x-dashboard.breadcrumb title="emas" page="emas Management" active="emas" route="{{ route('emas.index') }}" />
@endsection

@section('content')
    <div class="card card-height-100 table-responsive">
        <!-- cardheader -->
        <div class="card-header border-bottom-dashed align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">emas Emas</h4>
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
                    <th scope="col">Name</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Level</th>
                    <th scope="col">Kadar</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="col-1"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($emass as $emas)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $emas->name }}</td>
                        <td>{{ $emas->weight }}</td>
                        <td>{{ $levels[$emas->level_emas_id]->name }}</td>
                        <td>{{ $kadars[$emas->kadar_emas_id]->name }}</td>
                        <td>{{ $emas->image }}</td>
                        <td>{{ $emas->description }}</td>
                        <td>{{ $emas->status }}</td>
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
