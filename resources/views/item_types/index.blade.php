@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-tags"></i>
            Data Jenis Barang
        </h2>

        <a href="{{ route('item-types.create') }}" class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Jenis Barang

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-dark">

                    <tr>
                        <th width="80">ID</th>
                        <th>Nama Jenis</th>
                        <th>Deskripsi</th>
                        <th width="130">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($itemTypes as $row)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            <strong>
                                {{ $row->item_type_name }}
                            </strong>
                        </td>

                        <td>
                            {{ $row->description }}
                        </td>

                        <td>

                            <a href="{{ route('item-types.edit',$row->item_type_id) }}" class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form action="{{ route('item-types.destroy',$row->item_type_id) }}" method="POST"
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

                        <td colspan="4" class="text-center">

                            Data jenis barang belum tersedia

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection