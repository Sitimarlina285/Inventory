@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Edit Inventory</h2>

    <form action="{{ route('inventories.update',$inventory->inventory_id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Barang</label>

            <select name="item_id" class="form-control">

                @foreach($items as $item)

                <option value="{{ $item->item_id }}" {{ $inventory->item_id == $item->item_id ? 'selected' : '' }}>

                    {{ $item->item_name }}

                </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">
            <label>Quantity</label>

            <input type="number" name="quantity" value="{{ $inventory->quantity }}" class="form-control">

        </div>

        <div class="mb-3">
            <label>Harga</label>

            <input type="number" name="price" value="{{ $inventory->price }}" class="form-control">

        </div>

        <div class="mb-3">
            <label>Merk</label>

            <input type="text" name="merk" value="{{ $inventory->merk }}" class="form-control">

        </div>

        <div class="mb-3">
            <label>Spesifikasi</label>

            <textarea name="specification" class="form-control">{{ $inventory->specification }}</textarea>

        </div>

        <div class="mb-3">
            <label>Deskripsi</label>

            <textarea name="description" class="form-control">{{ $inventory->description }}</textarea>

        </div>

        <div class="mb-3">

            <label>Status</label>

            <select name="status" class="form-control">

                <option value="Active" {{ $inventory->status == 'Active' ? 'selected' : '' }}>
                    Active
                </option>

                <option value="Rusak" {{ $inventory->status == 'Rusak' ? 'selected' : '' }}>
                    Rusak
                </option>

                <option value="Maintenance" {{ $inventory->status == 'Maintenance' ? 'selected' : '' }}>
                    Maintenance
                </option>

            </select>

        </div>

        <div class="mb-3">

            <label>Expired Date</label>

            <input type="date" name="expired_date" value="{{ $inventory->expired_date }}" class="form-control">

        </div>

        <button class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('inventories.index') }}" class="btn btn-secondary">
            Kembali </a>

    </form>

</div>

@endsection