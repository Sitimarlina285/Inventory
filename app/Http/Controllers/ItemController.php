<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemType;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('itemType')->get();

        return view('items.index', compact('items'));
    }

    public function create()
    {
        $itemTypes = ItemType::all();

        return view('items.create', compact('itemTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'unit' => 'required',
            'item_type_id' => 'required'
        ]);

        Item::create($request->all());

        return redirect()
            ->route('items.index')
            ->with('success', 'Data berhasil disimpan');
    }

    public function show(string $id)
    {
        $item = Item::findOrFail($id);

        return view('items.show', compact('item'));
    }

    public function edit(string $id)
    {
        $item = Item::findOrFail($id);
        $itemTypes = ItemType::all();

        return view('items.edit', compact(
            'item',
            'itemTypes'
        ));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'item_name' => 'required',
            'unit' => 'required',
            'item_type_id' => 'required'
        ]);

        $item = Item::findOrFail($id);

        $item->update($request->all());

        return redirect()
            ->route('items.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
{
    try {

        Item::findOrFail($id)->delete();

        return redirect()
            ->route('items.index')
            ->with('success','Data berhasil dihapus');

    } catch (\Exception $e) {

        return redirect()
            ->route('items.index')
            ->with('error',
                'Item masih digunakan oleh Inventory');
    }
}
}