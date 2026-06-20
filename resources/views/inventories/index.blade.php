@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Data Inventory</h2>

    <a href="{{ route('inventories.create') }}" class="btn btn-primary mb-3">
        Tambah Inventory
    </a>

    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>No</th>
                <th>Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Merk</th>
                <th>Barcode</th>
                <th>Status</th>
                <th>Expired</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @foreach($inventories as $inventory)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $inventory->item->item_name }}</td>

                <td>{{ $inventory->quantity }}</td>

                <td>
                    Rp {{ number_format($inventory->price,0,',','.') }}
                </td>

                <td>{{ $inventory->merk }}</td>


                <td>{{ $inventory->barcode }}</td>



                <td>{{ $inventory->status }}</td>

                <td>{{ $inventory->expired_date }}</td>

                <td>

                    <a href="{{ route('inventories.edit',$inventory->inventory_id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('inventories.destroy',$inventory->inventory_id) }}" method="POST"
                        style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection