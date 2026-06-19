@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Dashboard Inventory</h2>

    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Item Types</h5>
                    <h2>{{ $itemTypes }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Items</h5>
                    <h2>{{ $items }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Buildings</h5>
                    <h2>{{ $buildings }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Rooms</h5>
                    <h2>{{ $rooms }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Inventories</h5>
                    <h2>{{ $inventories }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Transactions</h5>
                    <h2>{{ $transactions }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Distribution</h5>
                    <h2>{{ $inventoryRooms }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-6">

            <div class="card">

                <div class="card-header">
                    Total Budget
                </div>

                <div class="card-body">

                    <h3>
                        Rp {{ number_format($totalBudget,0,',','.') }}
                    </h3>

                </div>

            </div>

        </div>

        <div class="col-md-6">

            <div class="card">

                <div class="card-header">
                    Budget Realization
                </div>

                <div class="card-body">

                    <h3>
                        Rp {{ number_format($totalRealization,0,',','.') }}
                    </h3>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection