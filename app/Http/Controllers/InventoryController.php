<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Item;
use App\Models\InventoryTransaction;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::with([
            'item',
            'transaction'
        ])->get();

        return view(
            'inventories.index',
            compact('inventories')
        );
    }

    public function create()
    {
        $items = Item::all();

        $transactions =
            InventoryTransaction::all();

        return view(
            'inventories.create',
            compact(
                'items',
                'transactions'
            )
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        $photo = null;

        if($request->hasFile('photo'))
        {
            $photo =
            $request->file('photo')
            ->store('inventory','public');
        }

        Inventory::create([

            'item_id' =>
                $request->item_id,

            'inventory_transaction_id' =>
                $request->inventory_transaction_id,

            'quantity' =>
                $request->quantity,

            'price' =>
                $request->price,

            'specification' =>
                $request->specification,

            'status' =>
                $request->status,

            'photo' =>
                $photo,

            'description' =>
                $request->description,

            'merk' =>
                $request->merk,

            'barcode' =>
                'INV'.time(),

            'expired_date' =>
                $request->expired_date
        ]);

        return redirect()
            ->route('inventories.index');
    }

    public function edit(string $id)
    {
        $inventory =
            Inventory::findOrFail($id);

        $items = Item::all();

        $transactions =
            InventoryTransaction::all();

        return view(
            'inventories.edit',
            compact(
                'inventory',
                'items',
                'transactions'
            )
        );
    }

    public function update(
        Request $request,
        string $id
    )
    {
        $inventory =
            Inventory::findOrFail($id);

        $inventory->update([
            'item_id' =>
                $request->item_id,

            'inventory_transaction_id' =>
                $request->inventory_transaction_id,

            'quantity' =>
                $request->quantity,

            'price' =>
                $request->price,

            'specification' =>
                $request->specification,

            'status' =>
                $request->status,

            'description' =>
                $request->description,

            'merk' =>
                $request->merk,

            'expired_date' =>
                $request->expired_date
        ]);

        return redirect()
            ->route('inventories.index');
    }

    public function destroy($id)
{
    try {

        Inventory::findOrFail($id)->delete();

        return redirect()
            ->route('inventories.index')
            ->with('success','Data berhasil dihapus');

    } catch (\Exception $e) {

        return redirect()
            ->route('inventories.index')
            ->with('error',
                'Inventory masih digunakan oleh Distribution');
    }
}
}