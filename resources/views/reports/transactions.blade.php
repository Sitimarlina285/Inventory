@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Laporan Transaksi</h2>

        <button onclick="window.print()" class="btn btn-danger">
            🖨 Print PDF
        </button>

    </div>

    <table class="table table-bordered table-striped">

        <thead>

            <tr>
                <th>No Transaksi</th>
                <th>Tanggal</th>
                <th>Jenis Transaksi</th>
                <th>Total Budget</th>
            </tr>

        </thead>

        <tbody>

            @foreach($transactions as $row)

            <tr>

                <td>{{ $row->transaction_number }}</td>

                <td>{{ $row->transaction_date }}</td>

                <td>
                    {{ $row->transactionType->transaction_type_name }}
                </td>

                <td>
                    Rp {{ number_format($row->total_budget,0,',','.') }}
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection