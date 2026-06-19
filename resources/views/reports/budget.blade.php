@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Laporan Budget vs Realisasi</h2>

    <div class="alert alert-primary">

        <h4>
            Total Budget :
            Rp {{ number_format($totalBudget) }}
        </h4>

        <h4>
            Total Realisasi :
            Rp {{ number_format($totalRealization) }}
        </h4>

    </div>

    <table class="table table-bordered">

        <tr>
            <th>No Transaksi</th>
            <th>Budget</th>
            <th>Realisasi</th>
        </tr>

        @foreach($transactions as $row)

        <tr>

            <td>{{ $row->transaction_number }}</td>

            <td>
                Rp {{ number_format($row->total_budget) }}
            </td>

            <td>
                Rp {{ number_format($row->budget_realization) }}
            </td>

        </tr>

        @endforeach

    </table>

</div>

@endsection