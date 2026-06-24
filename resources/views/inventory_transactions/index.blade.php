@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card bg-primary text-white border-0 shadow">
                <div class="card-body">
                    <h6>Total Transaksi</h6>
                    <h3>{{ $transactions->count() }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-success text-white border-0 shadow">
                <div class="card-body">
                    <h6>Total Budget</h6>
                    <h5>
                        Rp {{ number_format($transactions->sum('total_budget'),0,',','.') }}
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card bg-warning border-0 shadow">
                <div class="card-body">
                    <h6>Total Realisasi</h6>
                    <h5>
                        Rp {{ number_format($transactions->sum('budget_realization'),0,',','.') }}
                    </h5>
                </div>
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-cash-stack"></i>
            Data Transaksi Inventory
        </h2>

        <a href="{{ route('inventory-transactions.create') }}" class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Transaksi

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>No</th>
                        <th>No Transaksi</th>
                        <th>Jenis</th>
                        <th>Budget</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                        <th width="120">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($transactions as $trx)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <strong>
                                {{ $trx->transaction_number }}
                            </strong>
                        </td>

                        <td>
                            {{ $trx->transactionType->transaction_type_name }}
                        </td>

                        <td>
                            Rp {{ number_format($trx->total_budget,0,',','.') }}
                        </td>

                        <td>

                            @if($trx->status == 'Draft')

                            <span class="badge bg-secondary">
                                Draft
                            </span>

                            @elseif($trx->status == 'Approved')

                            <span class="badge bg-success">
                                Approved
                            </span>

                            @elseif($trx->status == 'Completed')

                            <span class="badge bg-primary">
                                Completed
                            </span>

                            @endif

                        </td>

                        <td>
                            {{ date('d-m-Y', strtotime($trx->transaction_date)) }}
                        </td>

                        <td>

                            <a href="{{ route('inventory-transactions.edit',$trx->inventory_transaction_id) }}"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form action="{{ route('inventory-transactions.destroy',$trx->inventory_transaction_id) }}"
                                method="POST" style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="7" class="text-center">

                            Belum ada data transaksi

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection