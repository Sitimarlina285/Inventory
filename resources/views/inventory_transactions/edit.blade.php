@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Edit Transaksi Inventory</h2>

    <form action="{{ route('inventory-transactions.update',$transaction->inventory_transaction_id) }}" method="POST"
        enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Tanggal Transaksi</label>

            <input type="date" name="transaction_date" value="{{ $transaction->transaction_date }}"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Jenis Transaksi</label>

            <select name="transaction_type_id" class="form-control">

                @foreach($transactionTypes as $type)

                <option value="{{ $type->transaction_type_id }}"
                    {{ $transaction->transaction_type_id == $type->transaction_type_id ? 'selected' : '' }}>

                    {{ $type->transaction_type_name }}

                </option>

                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label>Sumber Dana</label>

            <input type="text" name="source_of_funds" value="{{ $transaction->source_of_funds }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Total Budget</label>

            <input type="number" name="total_budget" value="{{ $transaction->total_budget }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Budget Realization</label>

            <input type="number" name="budget_realization" value="{{ $transaction->budget_realization }}"
                class="form-control">
        </div>

        <div class="mb-3">
            <label>Status</label>

            <select name="status" class="form-control">

                <option value="Draft" {{ $transaction->status == 'Draft' ? 'selected' : '' }}>
                    Draft
                </option>

                <option value="Approved" {{ $transaction->status == 'Approved' ? 'selected' : '' }}>
                    Approved
                </option>

                <option value="Completed" {{ $transaction->status == 'Completed' ? 'selected' : '' }}>
                    Completed
                </option>

            </select>
        </div>

        <div class="mb-3">
            <label>Start Date</label>

            <input type="date" name="start_date" value="{{ $transaction->start_date }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>End Date</label>

            <input type="date" name="end_date" value="{{ $transaction->end_date }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Evidence File Baru</label>

            <input type="file" name="evidence_file" class="form-control">
        </div>

        @if($transaction->evidence_file)

        <div class="mb-3">

            <a href="{{ asset('storage/'.$transaction->evidence_file) }}" target="_blank" class="btn btn-info">

                Lihat Evidence Saat Ini

            </a>

        </div>

        @endif

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('inventory-transactions.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection