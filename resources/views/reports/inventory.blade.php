@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Laporan Inventory</h2>

        <button onclick="window.print()" class="btn btn-danger">
            🖨 Print PDF
        </button>

    </div>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

            @foreach($inventories as $row)

            <tr>

                <td>{{ $row->item->item_name }}</td>

                <td>{{ $row->quantity }}</td>

                <td>
                    Rp {{ number_format($row->price,0,',','.') }}
                </td>

                <td>{{ $row->status }}</td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection