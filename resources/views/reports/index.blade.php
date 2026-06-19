@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Laporan Inventory</h2>

    <div class="list-group">

        <a href="/reports/inventory" class="list-group-item">
            Laporan Inventory
        </a>

        <a href="/reports/transactions" class="list-group-item">
            Laporan Transaksi
        </a>

        <a href="/reports/distribution" class="list-group-item">
            Laporan Distribusi Barang
        </a>

        <a href="/reports/budget" class="list-group-item">
            Laporan Budget vs Realisasi
        </a>

    </div>

</div>

@endsection