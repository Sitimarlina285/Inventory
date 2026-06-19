<?php

namespace App\Http\Controllers;

use App\Models\InventoryTransaction;
use App\Models\TransactionType;
use Illuminate\Http\Request;

class InventoryTransactionController extends Controller
{
    public function index()
    {
        $transactions = InventoryTransaction::with('transactionType')->get();

        return view('inventory_transactions.index', compact('transactions'));
    }

    public function create()
    {
        $transactionTypes = TransactionType::all();

        return view('inventory_transactions.create', compact('transactionTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'transaction_date' => 'required',
            'transaction_type_id' => 'required',
        ]);

        $file = null;

        if ($request->hasFile('evidence_file')) {
            $file = $request->file('evidence_file')
                ->store('evidence', 'public');
        }

        InventoryTransaction::create([
            'transaction_date' => $request->transaction_date,
            'transaction_number' => 'TRX' . date('YmdHis'),
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'evidence_file' => $file,
            'source_of_funds' => $request->source_of_funds,
            'total_budget' => $request->total_budget,
            'budget_realization' => $request->budget_realization,
            'transaction_type_id' => $request->transaction_type_id
        ]);

        return redirect()
            ->route('inventory-transactions.index')
            ->with('success', 'Transaksi berhasil disimpan');
    }

    public function show(string $id)
    {
        $transaction = InventoryTransaction::findOrFail($id);

        return view(
            'inventory_transactions.show',
            compact('transaction')
        );
    }

    public function edit(string $id)
    {
        $transaction = InventoryTransaction::findOrFail($id);

        $transactionTypes = TransactionType::all();

        return view(
            'inventory_transactions.edit',
            compact(
                'transaction',
                'transactionTypes'
            )
        );
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'transaction_date' => 'required',
            'transaction_type_id' => 'required',
        ]);

        $transaction =
            InventoryTransaction::findOrFail($id);

        $transaction->update([
            'transaction_date' => $request->transaction_date,
            'status' => $request->status,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'source_of_funds' => $request->source_of_funds,
            'total_budget' => $request->total_budget,
            'budget_realization' => $request->budget_realization,
            'transaction_type_id' => $request->transaction_type_id
        ]);

        return redirect()
            ->route('inventory-transactions.index')
            ->with('success', 'Transaksi berhasil diupdate');
    }

    public function destroy($id)
{
    try {

        InventoryTransaction::findOrFail($id)->delete();

        return redirect()
            ->route('inventory-transactions.index')
            ->with(
                'success',
                'Data berhasil dihapus.'
            );

    } catch (\Exception $e) {

        return redirect()
            ->route('inventory-transactions.index')
            ->with(
                'error',
                'Transaksi masih digunakan oleh data inventory.'
            );
    }
}
}