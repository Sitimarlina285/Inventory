@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Distribusi Barang</h2>

    <a href="{{ route('inventory-rooms.create') }}" class="btn btn-primary mb-3">
        Tambah Distribusi
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Ruangan</th>
                <th>Qty</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($inventoryRooms as $row)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $row->inventory->item->item_name }}</td>

                <td>{{ $row->room->room_name }}</td>

                <td>{{ $row->quantity }}</td>

                <td>{{ $row->status }}</td>

                <td>{{ $row->inventory_date }}</td>

                <td>

                    <a href="{{ route('inventory-rooms.edit',$row->inventory_room_id) }}"
                        class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('inventory-rooms.destroy',$row->inventory_room_id) }}" method="POST"
                        style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection