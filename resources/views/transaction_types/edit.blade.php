@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Edit Jenis Transaksi</h2>

    <form action="{{ route('transaction-types.update',$transactionType->transaction_type_id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Jenis Transaksi</label>

            <input type="text" name="transaction_type_name" value="{{ $transactionType->transaction_type_name }}"
                class="form-control">

        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

@endsection