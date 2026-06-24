@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h2 class="fw-bold mb-4">
        Dashboard Inventory
    </h2>

    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body">

                    <h6>
                        <i class="bi bi-tags"></i>
                        Item Types
                    </h6>

                    <h1>{{ $itemTypes }}</h1>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white">
                <div class="card-body">

                    <h6>
                        <i class="bi bi-box"></i>
                        Items
                    </h6>

                    <h1>{{ $items }}</h1>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-dark">
                <div class="card-body">

                    <h6>
                        <i class="bi bi-building"></i>
                        Buildings
                    </h6>

                    <h1>{{ $buildings }}</h1>

                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card bg-danger text-white">
                <div class="card-body">

                    <h6>
                        <i class="bi bi-door-open"></i>
                        Rooms
                    </h6>

                    <h1>{{ $rooms }}</h1>

                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">

                <div class="card-body">

                    <h6 class="text-muted">
                        <i class="bi bi-archive"></i>
                        Inventories
                    </h6>

                    <h1 class="text-primary">
                        {{ $inventories }}
                    </h1>

                </div>

            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">

                <div class="card-body">

                    <h6 class="text-muted">
                        <i class="bi bi-arrow-left-right"></i>
                        Transactions
                    </h6>

                    <h1 class="text-success">
                        {{ $transactions }}
                    </h1>

                </div>

            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-0 shadow">

                <div class="card-body">

                    <h6 class="text-muted">
                        <i class="bi bi-diagram-3"></i>
                        Distribution
                    </h6>

                    <h1 class="text-danger">
                        {{ $inventoryRooms }}
                    </h1>

                </div>

            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow">

                <div class="card-header bg-success text-white">

                    <i class="bi bi-cash-stack"></i>
                    Total Budget

                </div>

                <div class="card-body">

                    <h2 class="fw-bold text-success">

                        Rp {{ number_format($totalBudget,0,',','.') }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-6 mb-4">

            <div class="card border-0 shadow">

                <div class="card-header bg-primary text-white">

                    <i class="bi bi-graph-up-arrow"></i>
                    Budget Realization

                </div>

                <div class="card-body">

                    <h2 class="fw-bold text-primary">

                        Rp {{ number_format($totalRealization,0,',','.') }}

                    </h2>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection