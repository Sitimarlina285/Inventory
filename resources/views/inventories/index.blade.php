@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-box-seam"></i>
            Data Inventory
        </h2>

        <a href="{{ route('inventories.create') }}" class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Inventory

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <table class="table table-bordered table-striped table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th>No</th>
                        <th>Barang</th>
                        <th>Foto</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Merk</th>
                        <th>QR Code</th>
                        <th>Status</th>
                        <th>Expired</th>
                        <th width="150">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($inventories as $inventory)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            <strong>
                                {{ $inventory->item->item_name }}
                            </strong>
                        </td>

                        <td class="text-center">

                            @if($inventory->photo)

                            <img src="{{ asset('storage/'.$inventory->photo) }}" width="70" height="70" style="
                                    object-fit:cover;
                                    border-radius:10px;
                                    border:1px solid #ddd;
                                ">

                            @else

                            <span class="badge bg-secondary">
                                No Photo
                            </span>

                            @endif

                        </td>

                        <td>
                            {{ $inventory->quantity }}
                        </td>

                        <td>
                            Rp {{ number_format($inventory->price,0,',','.') }}
                        </td>

                        <td>
                            {{ $inventory->merk }}
                        </td>

                        <td class="text-center">

                            {!! QrCode::size(70)->generate(
                            url('/inventories/'.$inventory->inventory_id)
                            ) !!}

                        </td>

                        <td>

                            @if($inventory->status == 'Active')

                            <span class="badge bg-success">
                                Active
                            </span>

                            @elseif($inventory->status == 'Rusak')

                            <span class="badge bg-danger">
                                Rusak
                            </span>

                            @elseif($inventory->status == 'Maintenance')

                            <span class="badge bg-warning text-dark">
                                Maintenance
                            </span>

                            @else

                            <span class="badge bg-secondary">
                                {{ $inventory->status }}
                            </span>

                            @endif

                        </td>

                        <td>
                            {{ $inventory->expired_date }}
                        </td>

                        <td>

                            <a href="{{ route('inventories.edit',$inventory->inventory_id) }}"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form action="{{ route('inventories.destroy',$inventory->inventory_id) }}" method="POST"
                                style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="10" class="text-center">

                            Data inventory belum tersedia

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection