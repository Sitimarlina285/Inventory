@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-plus-circle"></i>
            Tambah Transaksi Inventory
        </h2>

        <a href="{{ route('inventory-transactions.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('inventory-transactions.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Tanggal Transaksi
                        </label>

                        <input type="date" name="transaction_date" class="form-control" required>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Jenis Transaksi
                        </label>

                        <select name="transaction_type_id" class="form-control" required>

                            <option value="">
                                Pilih Jenis Transaksi
                            </option>

                            @foreach($transactionTypes as $type)

                            <option value="{{ $type->transaction_type_id }}">
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

                        <input type="text" name="source_of_funds" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Status
                        </label>

                        <select name="status" class="form-control">

                            <option value="Draft">
                                Draft
                            </option>

                            <option value="Approved">
                                Approved
                            </option>

                            <option value="Completed">
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

                        <input type="number" name="total_budget" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Budget Realization
                        </label>

                        <input type="number" name="budget_realization" class="form-control">

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            Start Date
                        </label>

                        <input type="date" name="start_date" class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label fw-bold">
                            End Date
                        </label>

                        <input type="date" name="end_date" class="form-control">

                    </div>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Upload Evidence
                    </label>

                    <input type="file" name="evidence_file" class="form-control">

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