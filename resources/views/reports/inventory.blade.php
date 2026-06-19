@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Laporan Inventory</h2>

    <table class="table table-bordered">

        <tr>
            <th>Barang</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Status</th>
        </tr>

        @foreach($inventories as $row)

        <tr>

            <td>{{ $row->item->item_name }}</td>

            <td>{{ $row->quantity }}</td>

            <td>
                Rp {{ number_format($row->price) }}
            </td>

            <td>{{ $row->status }}</td>

        </tr>

        @endforeach

    </table>

</div>

@endsection