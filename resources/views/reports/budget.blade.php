@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Laporan Budget vs Realisasi</h2>

        <button onclick="window.print()" class="btn btn-danger">
            🖨 Print PDF
        </button>

    </div>

    <div class="row mb-4">

        <div class="col-md-6">

            <div class="card border-0 shadow">

                <div class="card-header bg-success text-white">
                    Total Budget
                </div>

                <div class="card-body">

                    <h2 class="text-success">
                        Rp {{ number_format($totalBudget,0,',','.') }}
                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card border-0 shadow">

                <div class="card-header bg-primary text-white">
                    Total Realisasi
                </div>

                <div class="card-body">

                    <h2 class="text-primary">
                        Rp {{ number_format($totalRealization,0,',','.') }}
                    </h2>

                </div>

            </div>

        </div>

    </div>

    <table class="table table-bordered table-striped">

        <thead>

            <tr>
                <th>No Transaksi</th>
                <th>Budget</th>
                <th>Realisasi</th>
                <th>Selisih</th>
            </tr>

        </thead>

        <tbody>

            @foreach($transactions as $row)

            <tr>

                <td>{{ $row->transaction_number }}</td>

                <td>
                    Rp {{ number_format($row->total_budget,0,',','.') }}
                </td>

                <td>
                    Rp {{ number_format($row->budget_realization,0,',','.') }}
                </td>

                <td>
                    Rp {{ number_format($row->total_budget - $row->budget_realization,0,',','.') }}
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection