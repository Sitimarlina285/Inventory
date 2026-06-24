@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-pencil-square"></i>
            Edit Transaksi Inventory
        </h2>

        <a href="{{ route('inventory-transactions.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('inventory-transactions.update',$transaction->inventory_transaction_id) }}"
                method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Tanggal Transaksi
                        </label>

                        <input type="date" name="transaction_date" value="{{ $transaction->transaction_date }}"
                            class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Jenis Transaksi
                        </label>

                        <select name="transaction_type_id" class="form-control">

                            @foreach($transactionTypes as $type)

                            <option value="{{ $type->transaction_type_id }}"
                                {{ $transaction->transaction_type_id == $type->transaction_type_id ? 'selected' : '' }}>

                                {{ $type->transaction_type_name }}

                            </option>

                            @endforeach

                        </select>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Sumber Dana
                        </label>

                        <input type="text" name="source_of_funds" value="{{ $transaction->source_of_funds }}"
                            class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Status
                        </label>

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

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Total Budget
                        </label>

                        <input type="number" name="total_budget" value="{{ $transaction->total_budget }}"
                            class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Budget Realization
                        </label>

                        <input type="number" name="budget_realization" value="{{ $transaction->budget_realization }}"
                            class="form-control">

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Start Date
                        </label>

                        <input type="date" name="start_date" value="{{ $transaction->start_date }}"
                            class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            End Date
                        </label>

                        <input type="date" name="end_date" value="{{ $transaction->end_date }}" class="form-control">

                    </div>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Upload Evidence Baru
                    </label>

                    <input type="file" name="evidence_file" class="form-control">

                </div>

                @if($transaction->evidence_file)

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Evidence Saat Ini
                    </label>

                    <br>

                    <a href="{{ asset('storage/'.$transaction->evidence_file) }}" target="_blank" class="btn btn-info">

                        <i class="bi bi-file-earmark"></i>
                        Lihat Evidence

                    </a>

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