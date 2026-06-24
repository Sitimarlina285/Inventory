@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-plus-circle"></i>
            Tambah Jenis Barang
        </h2>

        <a href="{{ route('item-types.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('item-types.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Nama Jenis Barang
                    </label>

                    <input type="text" name="item_type_name" class="form-control"
                        placeholder="Masukkan nama jenis barang" required>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Deskripsi
                    </label>

                    <textarea name="description" class="form-control" rows="4"
                        placeholder="Masukkan deskripsi jenis barang"></textarea>

                </div>

                <button type="submit" class="btn btn-success">

                    <i class="bi bi-save"></i>
                    Simpan Data

                </button>

            </form>

        </div>

    </div>

</div>

@endsection