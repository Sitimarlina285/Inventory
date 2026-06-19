@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Tambah Ruangan</h2>

    <form action="{{ route('rooms.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Ruangan</label>
            <input type="text" name="room_name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Lantai</label>
            <input type="text" name="floor" class="form-control">
        </div>

        <div class="mb-3">

            <label>Gedung</label>

            <select name="building_id" class="form-control">

                @foreach($buildings as $building)

                <option value="{{ $building->building_id }}">
                    {{ $building->building_name }}
                </option>

                @endforeach

            </select>

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

@endsection