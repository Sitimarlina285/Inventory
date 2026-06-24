@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h2 class="fw-bold mb-4">
        <i class="bi bi-bar-chart-line"></i>
        Laporan Inventory
    </h2>

    <div class="row">

        <div class="col-md-6 col-lg-3 mb-4">

            <a href="/reports/inventory" class="text-decoration-none">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-box-seam text-primary" style="font-size:60px;"></i>

                        <h5 class="mt-3">
                            Laporan Inventory
                        </h5>

                        <p class="text-muted">
                            Data seluruh stok barang
                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-6 col-lg-3 mb-4">

            <a href="/reports/transactions" class="text-decoration-none">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-arrow-left-right text-success" style="font-size:60px;"></i>

                        <h5 class="mt-3">
                            Laporan Transaksi
                        </h5>

                        <p class="text-muted">
                            Data transaksi inventory
                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-6 col-lg-3 mb-4">

            <a href="/reports/distribution" class="text-decoration-none">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-diagram-3 text-warning" style="font-size:60px;"></i>

                        <h5 class="mt-3">
                            Distribusi Barang
                        </h5>

                        <p class="text-muted">
                            Barang per lokasi
                        </p>

                    </div>

                </div>

            </a>

        </div>

        <div class="col-md-6 col-lg-3 mb-4">

            <a href="/reports/budget" class="text-decoration-none">

                <div class="card border-0 shadow h-100">

                    <div class="card-body text-center">

                        <i class="bi bi-cash-stack text-danger" style="font-size:60px;"></i>

                        <h5 class="mt-3">
                            Budget vs Realisasi
                        </h5>

                        <p class="text-muted">
                            Analisis penggunaan dana
                        </p>

                    </div>

                </div>

            </a>

        </div>

    </div>

</div>

@endsection