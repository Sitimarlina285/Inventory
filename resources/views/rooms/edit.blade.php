@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Edit Ruangan</h2>

    <form action="{{ route('rooms.update',$room->room_id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Ruangan</label>

            <input type="text" name="room_name" value="{{ $room->room_name }}" class="form-control">

        </div>

        <div class="mb-3">

            <label>Lantai</label>

            <input type="text" name="floor" value="{{ $room->floor }}" class="form-control">

        </div>

        <div class="mb-3">

            <label>Gedung</label>

            <select name="building_id" class="form-control">

                @foreach($buildings as $building)

                <option value="{{ $building->building_id }}"
                    {{ $room->building_id == $building->building_id ? 'selected' : '' }}>

                    {{ $building->building_name }}

                </option>

                @endforeach

            </select>

        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection