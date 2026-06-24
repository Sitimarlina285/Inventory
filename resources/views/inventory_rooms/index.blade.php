@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-diagram-3"></i>
            Distribusi Barang
        </h2>

        <a href="{{ route('inventory-rooms.create') }}" class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Distribusi

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th width="60">No</th>
                        <th>Barang</th>
                        <th>Ruangan</th>
                        <th width="100">Qty</th>
                        <th width="120">Status</th>
                        <th width="150">Tanggal</th>
                        <th width="140">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($inventoryRooms as $row)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>

                            <strong>
                                {{ $row->inventory->item->item_name }}
                            </strong>

                        </td>

                        <td>

                            {{ $row->room->room_name }}

                        </td>

                        <td>

                            <span class="badge bg-primary">
                                {{ $row->quantity }}
                            </span>

                        </td>

                        <td>

                            @if($row->status == 'Active')

                            <span class="badge bg-success">
                                Active
                            </span>

                            @elseif($row->status == 'Rusak')

                            <span class="badge bg-danger">
                                Rusak
                            </span>

                            @elseif($row->status == 'Maintenance')

                            <span class="badge bg-warning text-dark">
                                Maintenance
                            </span>

                            @else

                            <span class="badge bg-secondary">
                                {{ $row->status }}
                            </span>

                            @endif

                        </td>

                        <td>

                            {{ date('d-m-Y', strtotime($row->inventory_date)) }}

                        </td>

                        <td>

                            <a href="{{ route('inventory-rooms.edit',$row->inventory_room_id) }}"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form action="{{ route('inventory-rooms.destroy',$row->inventory_room_id) }}" method="POST"
                                style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="7" class="text-center">

                            Belum ada data distribusi barang

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection