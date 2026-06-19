@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Data Gedung</h2>

    <a href="{{ route('buildings.create') }}" class="btn btn-primary mb-3">
        Tambah Gedung
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama Gedung</th>
            <th>Aksi</th>
        </tr>

        @foreach($buildings as $building)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $building->building_name }}</td>

            <td>

                <a href="{{ route('buildings.edit',$building->building_id) }}" class="btn btn-warning">
                    Edit
                </a>

                <form action="{{ route('buildings.destroy',$building->building_id) }}" method="POST"
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