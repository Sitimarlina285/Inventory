@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Tambah Jenis Transaksi</h2>

    <form action="{{ route('transaction-types.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label>Jenis Transaksi</label>

            <input type="text" name="transaction_type_name" class="form-control">

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

@endsection