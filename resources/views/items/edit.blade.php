@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2>
            <i class="bi bi-pencil-square"></i>
            Edit Barang
        </h2>

        <a href="{{ route('items.index') }}" class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow">

        <div class="card-body">

            <form action="{{ route('items.update',$item->item_id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Nama Barang
                    </label>

                    <input type="text" name="item_name" value="{{ $item->item_name }}" class="form-control" required>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Satuan
                    </label>

                    <input type="text" name="unit" value="{{ $item->unit }}" class="form-control"
                        placeholder="Contoh: Unit, Pcs, Box" required>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Jenis Barang
                    </label>

                    <select name="item_type_id" class="form-control" required>

                        @foreach($itemTypes as $type)

                        <option value="{{ $type->item_type_id }}"
                            {{ $item->item_type_id == $type->item_type_id ? 'selected' : '' }}>

                            {{ $type->item_type_name }}

                        </option>

                        @endforeach

                    </select>

                </div>

                <button type="submit" class="btn btn-primary">

                    <i class="bi bi-save"></i>
                    Update Data

                </button>

            </form>

        </div>

    </div>

</div>

@endsection