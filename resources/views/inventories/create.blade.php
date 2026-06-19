@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Tambah Inventory</h2>

    <form action="{{ route('inventories.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">

            <label>Barang</label>

            <select name="item_id" class="form-control">

                @foreach($items as $item)

                <option value="{{ $item->item_id }}">
                    {{ $item->item_name }}
                </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label>Transaksi</label>

            <select name="inventory_transaction_id" class="form-control">

                @foreach($transactions as $trx)

                <option value="{{ $trx->inventory_transaction_id }}">
                    {{ $trx->transaction_number }}
                </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control">
        </div>

        <div class="mb-3">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control">
        </div>

        <div class="mb-3">
            <label>Spesifikasi</label>
            <textarea name="specification" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Status</label>

            <select name="status" class="form-control">

                <option value="Active">Active</option>
                <option value="Rusak">Rusak</option>
                <option value="Maintenance">Maintenance</option>

            </select>

        </div>

        <div class="mb-3">
            <label>Expired Date</label>
            <input type="date" name="expired_date" class="form-control">
        </div>

        <div class="mb-3">
            <label>Foto Barang</label>
            <input type="file" name="photo" class="form-control">
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('inventories.index') }}" class="btn btn-secondary">
            Kembali </a>

    </form>

</div>

@endsection