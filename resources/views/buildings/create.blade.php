@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Tambah Gedung</h2>

    <form action="{{ route('buildings.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Nama Gedung</label>

            <input type="text" name="building_name" class="form-control">

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

@endsection