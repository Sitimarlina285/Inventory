@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-box-seam"></i>
            Data Barang
        </h2>

        <a href="{{ route('items.create') }}" class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Barang

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th width="80">No</th>
                        <th>Nama Barang</th>
                        <th>Jenis Barang</th>
                        <th width="120">Satuan</th>
                        <th width="130">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($items as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            <strong>
                                {{ $item->item_name }}
                            </strong>
                        </td>

                        <td>

                            <span class="badge bg-info text-dark">

                                {{ $item->itemType->item_type_name }}

                            </span>

                        </td>

                        <td>

                            <span class="badge bg-secondary">

                                {{ $item->unit }}

                            </span>

                        </td>

                        <td>

                            <a href="{{ route('items.edit',$item->item_id) }}" class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form action="{{ route('items.destroy',$item->item_id) }}" method="POST"
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

                            Data barang belum tersedia

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection