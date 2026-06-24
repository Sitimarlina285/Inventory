@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-plus-circle"></i>
            Tambah Inventory
        </h2>

        <a href="{{ route('inventories.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('inventories.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Barang
                        </label>

                        <select name="item_id" class="form-control" required>

                            <option value="">
                                Pilih Barang
                            </option>

                            @foreach($items as $item)

                            <option value="{{ $item->item_id }}">
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

                            <option value="">
                                Pilih Transaksi
                            </option>

                            @foreach($transactions as $trx)

                            <option value="{{ $trx->inventory_transaction_id }}">
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

                        <input type="number" name="quantity" class="form-control" required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Harga
                        </label>

                        <input type="number" name="price" class="form-control" required>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Merk
                        </label>

                        <input type="text" name="merk" class="form-control">

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
                        Spesifikasi
                    </label>

                    <textarea name="specification" class="form-control" rows="3"></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Deskripsi
                    </label>

                    <textarea name="description" class="form-control" rows="3"></textarea>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Expired Date
                        </label>

                        <input type="date" name="expired_date" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Foto Barang
                        </label>

                        <input type="file" name="photo" class="form-control">

                    </div>

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