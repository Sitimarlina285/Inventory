@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-pencil-square"></i>
            Edit Jenis Barang
        </h2>

        <a href="{{ route('item-types.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('item-types.update',$itemType->item_type_id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Nama Jenis Barang
                    </label>

                    <input type="text" name="item_type_name" value="{{ $itemType->item_type_name }}"
                        class="form-control" required>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Deskripsi
                    </label>

                    <textarea name="description" class="form-control" rows="4">{{ $itemType->description }}</textarea>

                </div>

                <button type="submit" class="btn btn-primary">

                    <i class="bi bi-save"></i>
                    Update Data

                </button>

            </form>

        </div>

    </div>

</div>

@endsection