@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Jenis Transaksi</h2>

    <a href="{{ route('transaction-types.create') }}" class="btn btn-primary mb-3">

        Tambah Jenis Transaksi

    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Jenis Transaksi</th>
            <th>Aksi</th>
        </tr>

        @foreach($transactionTypes as $row)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $row->transaction_type_name }}</td>

            <td>

                <a href="{{ route('transaction-types.edit',$row->transaction_type_id) }}" class="btn btn-warning">

                    Edit

                </a>

                <form action="{{ route('transaction-types.destroy',$row->transaction_type_id) }}" method="POST"
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