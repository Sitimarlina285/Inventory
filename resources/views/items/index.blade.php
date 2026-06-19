@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Data Barang</h2>

    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">
        Tambah Barang
    </a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis Barang</th>
                <th>Satuan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($items as $item)

            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->item_name }}</td>

                <td>
                    {{ $item->itemType->item_type_name }}
                </td>

                <td>{{ $item->unit }}</td>

                <td>

                    <a href="{{ route('items.edit',$item->item_id) }}" class="btn btn-warning">
                        Edit
                    </a>

                    <form action="{{ route('items.destroy',$item->item_id) }}" method="POST" style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger">
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