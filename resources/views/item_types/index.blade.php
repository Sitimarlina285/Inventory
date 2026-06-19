@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Item Types</h2>

    <a href="{{ route('item-types.create') }}" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @foreach($itemTypes as $row)

        <tr>
            <td>{{ $row->item_type_id }}</td>
            <td>{{ $row->item_type_name }}</td>
            <td>{{ $row->description }}</td>

            <td>

                <a href="{{ route('item-types.edit',$row->item_type_id) }}" class="btn btn-warning">
                    Edit
                </a>

                <form action="{{ route('item-types.destroy',$row->item_type_id) }}" method="POST"
                    style="display:inline">

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