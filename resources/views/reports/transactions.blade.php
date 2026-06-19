@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Laporan Transaksi</h2>

    <table class="table table-bordered">

        <tr>
            <th>No Transaksi</th>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Budget</th>
        </tr>

        @foreach($transactions as $row)

        <tr>

            <td>{{ $row->transaction_number }}</td>

            <td>{{ $row->transaction_date }}</td>

            <td>
                {{ $row->transactionType->transaction_type_name }}
            </td>

            <td>
                Rp {{ number_format($row->total_budget) }}
            </td>

        </tr>

        @endforeach

    </table>

</div>

@endsection