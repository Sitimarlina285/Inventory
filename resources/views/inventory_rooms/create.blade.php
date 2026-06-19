@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Tambah Distribusi Barang</h2>

    <form action="{{ route('inventory-rooms.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Barang</label>

            <select name="inventory_id" class="form-control">

                @foreach($inventories as $inventory)

                <option value="{{ $inventory->inventory_id }}">
                    {{ $inventory->item->item_name }}
                </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Ruangan</label>

            <select name="room_id" class="form-control">

                @foreach($rooms as $room)

                <option value="{{ $room->room_id }}">
                    {{ $room->room_name }}
                </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>
            <input type="text" name="status" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="inventory_date" class="form-control">
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

@endsection