@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>Laporan Distribusi Barang</h2>

        <button onclick="window.print()" class="btn btn-danger">
            🖨 Print PDF
        </button>

    </div>

    <table class="table table-bordered table-striped">

        <thead>

            <tr>
                <th>Barang</th>
                <th>Gedung</th>
                <th>Ruangan</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Tanggal Inventory</th>
            </tr>

        </thead>

        <tbody>

            @foreach($distributions as $row)

            <tr>

                <td>
                    {{ $row->inventory->item->item_name }}
                </td>

                <td>
                    {{ $row->room->building->building_name }}
                </td>

                <td>
                    {{ $row->room->room_name }}
                </td>

                <td>
                    {{ $row->quantity }}
                </td>

                <td>
                    {{ $row->status }}
                </td>

                <td>
                    {{ $row->inventory_date }}
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection