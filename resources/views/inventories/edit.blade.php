@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-pencil-square"></i>
            Edit Inventory
        </h2>

        <a href="{{ route('inventories.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i>
            Kembali
        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('inventories.update',$inventory->inventory_id) }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Barang
                        </label>

                        <select name="item_id" class="form-control">

                            @foreach($items as $item)

                            <option value="{{ $item->item_id }}"
                                {{ $inventory->item_id == $item->item_id ? 'selected' : '' }}>

                                {{ $item->item_name }}

                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Transaksi
                        </label>

                        <select name="inventory_transaction_id" class="form-control">

                            @foreach($transactions as $trx)

                            <option value="{{ $trx->inventory_transaction_id }}"
                                {{ $inventory->inventory_transaction_id == $trx->inventory_transaction_id ? 'selected' : '' }}>

                                {{ $trx->transaction_number }}

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

                        <input type="number" name="quantity" value="{{ $inventory->quantity }}" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Harga
                        </label>

                        <input type="number" name="price" value="{{ $inventory->price }}" class="form-control">

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Merk
                        </label>

                        <input type="text" name="merk" value="{{ $inventory->merk }}" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Status
                        </label>

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

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Spesifikasi
                    </label>

                    <textarea name="specification" class="form-control"
                        rows="3">{{ $inventory->specification }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Deskripsi
                    </label>

                    <textarea name="description" class="form-control" rows="3">{{ $inventory->description }}</textarea>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Expired Date
                        </label>

                        <input type="date" name="expired_date" value="{{ $inventory->expired_date }}"
                            class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Foto Barang
                        </label>

                        <input type="file" name="photo" class="form-control">

                    </div>

                </div>

                @if($inventory->photo)

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Foto Saat Ini
                    </label>

                    <br>

                    <img src="{{ asset('storage/'.$inventory->photo) }}" width="180" class="img-thumbnail shadow">

                </div>

                @endif

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i>
                    Update Data
                </button>

            </form>

        </div>

    </div>

</div>

@endsection