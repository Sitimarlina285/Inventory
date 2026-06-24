@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Detail Inventory</h2>

    <table class="table table-bordered">

        <tr>
            <th>Nama Barang</th>
            <td>{{ $inventory->item->item_name }}</td>
        </tr>

        <tr>
            <th>Qty</th>
            <td>{{ $inventory->quantity }}</td>
        </tr>

        <tr>
            <th>Harga</th>
            <td>
                Rp {{ number_format($inventory->price,0,',','.') }}
            </td>
        </tr>

        <tr>
            <th>Merk</th>
            <td>{{ $inventory->merk }}</td>
        </tr>

        <tr>
            <th>Spesifikasi</th>
            <td>{{ $inventory->specification }}</td>
        </tr>

        <tr>
            <th>Status</th>
            <td>{{ $inventory->status }}</td>
        </tr>

        <tr>
            <th>Barcode</th>
            <td>{{ $inventory->barcode }}</td>
        </tr>

        <tr>
            <th>Expired</th>
            <td>{{ $inventory->expired_date }}</td>
        </tr>

        <tr>
            <th>Deskripsi</th>
            <td>{{ $inventory->description }}</td>
        </tr>

    </table>

    <a href="{{ route('inventories.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</div>

@endsection