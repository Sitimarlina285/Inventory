@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{ route('item-types.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nama Jenis Barang</label>

            <input type="text" name="item_type_name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>

            <textarea name="description" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

@endsection