@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-door-open"></i>
            Data Ruangan
        </h2>

        <a href="{{ route('rooms.create') }}" class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Ruangan

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th width="80">No</th>
                        <th>Nama Ruangan</th>
                        <th width="120">Lantai</th>
                        <th>Gedung</th>
                        <th width="130">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($rooms as $room)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            <strong>
                                {{ $room->room_name }}
                            </strong>
                        </td>

                        <td>

                            <span class="badge bg-info text-dark">

                                Lantai {{ $room->floor }}

                            </span>

                        </td>

                        <td>

                            <span class="badge bg-secondary">

                                {{ $room->building->building_name }}

                            </span>

                        </td>

                        <td>

                            <a href="{{ route('rooms.edit',$room->room_id) }}" class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form action="{{ route('rooms.destroy',$room->room_id) }}" method="POST"
                                style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5" class="text-center">

                            Data ruangan belum tersedia

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection