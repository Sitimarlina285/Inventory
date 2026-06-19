@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Data Ruangan</h2>

    <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">
        Tambah Ruangan
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Ruangan</th>
            <th>Lantai</th>
            <th>Gedung</th>
            <th>Aksi</th>
        </tr>

        @foreach($rooms as $room)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $room->room_name }}</td>

            <td>{{ $room->floor }}</td>

            <td>{{ $room->building->building_name }}</td>

            <td>

                <a href="{{ route('rooms.edit',$room->room_id) }}" class="btn btn-warning">
                    Edit
                </a>

                <form action="{{ route('rooms.destroy',$room->room_id) }}" method="POST" style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger">
                        Hapus
                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

</div>

@endsection