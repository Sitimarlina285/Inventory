@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Edit Gedung</h2>

    <form action="{{ route('buildings.update',$building->building_id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Gedung</label>

            <input type="text" name="building_name" value="{{ $building->building_name }}" class="form-control">

        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection