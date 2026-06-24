@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-building"></i>
            Data Gedung
        </h2>

        <a href="{{ route('buildings.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>
            Tambah Gedung
        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark">

                    <tr>
                        <th width="80">No</th>
                        <th>Nama Gedung</th>
                        <th width="180">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($buildings as $building)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $building->building_name }}
                        </td>

                        <td>

                            <a href="{{ route('buildings.edit',$building->building_id) }}"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                            </a>

                            <form action="{{ route('buildings.destroy',$building->building_id) }}" method="POST"
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

                        <td colspan="3" class="text-center">
                            Data gedung belum tersedia
                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection