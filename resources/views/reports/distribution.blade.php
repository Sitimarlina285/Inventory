@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Laporan Distribusi Barang</h2>

    <table class="table table-bordered">

        <tr>
            <th>Barang</th>
            <th>Gedung</th>
            <th>Ruangan</th>
            <th>Qty</th>
        </tr>

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

        </tr>

        @endforeach

    </table>

</div>

@endsection