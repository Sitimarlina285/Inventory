@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-plus-circle"></i>
            Tambah Ruangan
        </h2>

        <a href="{{ route('rooms.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('rooms.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Nama Ruangan
                    </label>

                    <input type="text" name="room_name" class="form-control" placeholder="Masukkan nama ruangan"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Lantai
                    </label>

                    <input type="number" name="floor" class="form-control" placeholder="Masukkan nomor lantai" required>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Gedung
                    </label>

                    <select name="building_id" class="form-control" required>

                        <option value="">
                            -- Pilih Gedung --
                        </option>

                        @foreach($buildings as $building)

                        <option value="{{ $building->building_id }}">
                            {{ $building->building_name }}
                        </option>

                        @endforeach

                    </select>

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