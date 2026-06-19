@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Data Transaksi Inventory</h2>

    <a href="{{ route('inventory-transactions.create') }}" class="btn btn-primary mb-3">
        Tambah Transaksi
    </a>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>No</th>
                <th>No Transaksi</th>
                <th>Tanggal</th>
                <th>Jenis Transaksi</th>
                <th>Sumber Dana</th>
                <th>Total Budget</th>
                <th>Realisasi</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Evidence</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse($transactions as $trx)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $trx->transaction_number }}</td>

                <td>{{ $trx->transaction_date }}</td>

                <td>{{ $trx->transactionType->transaction_type_name }}</td>

                <td>{{ $trx->source_of_funds }}</td>

                <td>
                    Rp {{ number_format($trx->total_budget,0,',','.') }}
                </td>

                <td>
                    Rp {{ number_format($trx->budget_realization,0,',','.') }}
                </td>

                <td>{{ $trx->status }}</td>

                <td>{{ $trx->start_date }}</td>

                <td>{{ $trx->end_date }}</td>

                <td>

                    @if($trx->evidence_file)

                    <a href="{{ asset('storage/'.$trx->evidence_file) }}" target="_blank" class="btn btn-info btn-sm">
                        Lihat
                    </a>

                    @else

                    -

                    @endif

                </td>

                <td>

                    <a href="{{ route('inventory-transactions.edit',$trx->inventory_transaction_id) }}"
                        class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('inventory-transactions.destroy',$trx->inventory_transaction_id) }}"
                        method="POST" style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

            @empty

            <tr>
                <td colspan="12" class="text-center">
                    Belum ada data
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>

</div>

@endsection