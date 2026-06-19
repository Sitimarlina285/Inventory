@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Edit Distribusi Barang</h2>

    <form action="{{ route('inventory-rooms.update',$inventoryRoom->inventory_room_id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Quantity</label>

            <input type="number" name="quantity" value="{{ $inventoryRoom->quantity }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>

            <input type="text" name="status" value="{{ $inventoryRoom->status }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Tanggal</label>

            <input type="date" name="inventory_date" value="{{ $inventoryRoom->inventory_date }}" class="form-control">
        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection