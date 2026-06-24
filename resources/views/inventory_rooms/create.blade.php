@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-plus-circle"></i>
            Tambah Distribusi Barang
        </h2>

        <a href="{{ route('inventory-rooms.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('inventory-rooms.store') }}" method="POST">

                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Barang
                        </label>

                        <select name="inventory_id" class="form-control" required>

                            <option value="">
                                Pilih Barang
                            </option>

                            @foreach($inventories as $inventory)

                            <option value="{{ $inventory->inventory_id }}">
                                {{ $inventory->item->item_name }}
                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Ruangan
                        </label>

                        <select name="room_id" class="form-control" required>

                            <option value="">
                                Pilih Ruangan
                            </option>

                            @foreach($rooms as $room)

                            <option value="{{ $room->room_id }}">
                                {{ $room->room_name }}
                            </option>

                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Quantity
                        </label>

                        <input type="number" name="quantity" class="form-control" required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Status
                        </label>

                        <select name="status" class="form-control">

                            <option value="Active">
                                Active
                            </option>

                            <option value="Rusak">
                                Rusak
                            </option>

                            <option value="Maintenance">
                                Maintenance
                            </option>

                        </select>

                    </div>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Tanggal Distribusi
                    </label>

                    <input type="date" name="inventory_date" class="form-control" required>

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