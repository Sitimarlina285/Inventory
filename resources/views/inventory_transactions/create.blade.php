@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Tambah Transaksi Inventory</h2>

    <form action="{{ route('inventory-transactions.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Tanggal Transaksi</label>
            <input type="date" name="transaction_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jenis Transaksi</label>

            <select name="transaction_type_id" class="form-control" required>

                <option value="">Pilih Jenis</option>

                @foreach($transactionTypes as $type)

                <option value="{{ $type->transaction_type_id }}">
                    {{ $type->transaction_type_name }}
                </option>

                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label>Sumber Dana</label>
            <input type="text" name="source_of_funds" class="form-control">
        </div>

        <div class="mb-3">
            <label>Total Budget</label>
            <input type="number" name="total_budget" class="form-control">
        </div>

        <div class="mb-3">
            <label>Budget Realization</label>
            <input type="number" name="budget_realization" class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>

            <select name="status" class="form-control">

                <option value="Draft">Draft</option>
                <option value="Approved">Approved</option>
                <option value="Completed">Completed</option>

            </select>
        </div>

        <div class="mb-3">
            <label>Start Date</label>
            <input type="date" name="start_date" class="form-control">
        </div>

        <div class="mb-3">
            <label>End Date</label>
            <input type="date" name="end_date" class="form-control">
        </div>

        <div class="mb-3">
            <label>Evidence File</label>
            <input type="file" name="evidence_file" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('inventory-transactions.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection