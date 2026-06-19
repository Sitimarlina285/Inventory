@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Edit Barang</h2>

    <form action="{{ route('items.update',$item->item_id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Barang</label>

            <input type="text" name="item_name" value="{{ $item->item_name }}" class="form-control">

        </div>

        <div class="mb-3">

            <label>Satuan</label>

            <input type="text" name="unit" value="{{ $item->unit }}" class="form-control">

        </div>

        <div class="mb-3">

            <label>Jenis Barang</label>

            <select name="item_type_id" class="form-control">

                @foreach($itemTypes as $type)

                <option value="{{ $type->item_type_id }}"
                    {{ $item->item_type_id == $type->item_type_id ? 'selected' : '' }}>

                    {{ $type->item_type_name }}

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