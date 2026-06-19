<?php

namespace App\Http\Controllers;

use App\Models\TransactionType;
use Illuminate\Http\Request;

class TransactionTypeController extends Controller
{
    public function index()
    {
        $transactionTypes = TransactionType::all();

        return view(
            'transaction_types.index',
            compact('transactionTypes')
        );
    }

    public function create()
    {
        return view('transaction_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'transaction_type_name' => 'required'
        ]);

        TransactionType::create([
            'transaction_type_name' =>
            $request->transaction_type_name
        ]);

        return redirect()
            ->route('transaction-types.index')
            ->with('success','Data berhasil disimpan');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $transactionType =
            TransactionType::findOrFail($id);

        return view(
            'transaction_types.edit',
            compact('transactionType')
        );
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'transaction_type_name' => 'required'
        ]);

        $transactionType =
            TransactionType::findOrFail($id);

        $transactionType->update([
            'transaction_type_name' =>
            $request->transaction_type_name
        ]);

        return redirect()
            ->route('transaction-types.index')
            ->with('success','Data berhasil diupdate');
    }

   public function destroy($id)
{
    try {

        TransactionType::findOrFail($id)->delete();

        return redirect()
            ->route('transaction-types.index')
            ->with(
                'success',
                'Data berhasil dihapus.'
            );

    } catch (\Exception $e) {

        return redirect()
            ->route('transaction-types.index')
            ->with(
                'error',
                'Transaction Type masih digunakan oleh transaksi.'
            );
    }
}
}