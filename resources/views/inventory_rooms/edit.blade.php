@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-pencil-square"></i>
            Edit Distribusi Barang
        </h2>

        <a href="{{ route('inventory-rooms.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('inventory-rooms.update',$inventoryRoom->inventory_room_id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Quantity
                        </label>

                        <input type="number" name="quantity" value="{{ $inventoryRoom->quantity }}" class="form-control"
                            required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Status
                        </label>

                        <select name="status" class="form-control">

                            <option value="Active" {{ $inventoryRoom->status == 'Active' ? 'selected' : '' }}>
                                Active
                            </option>

                            <option value="Rusak" {{ $inventoryRoom->status == 'Rusak' ? 'selected' : '' }}>
                                Rusak
                            </option>

                            <option value="Maintenance" {{ $inventoryRoom->status == 'Maintenance' ? 'selected' : '' }}>
                                Maintenance
                            </option>

                        </select>

                    </div>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Tanggal Distribusi
                    </label>

                    <input type="date" name="inventory_date" value="{{ $inventoryRoom->inventory_date }}"
                        class="form-control" required>

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