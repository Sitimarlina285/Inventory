<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;

class ItemTypeController extends Controller
{
    public function index()
    {
        $itemTypes = ItemType::all();
        return view('item_types.index', compact('itemTypes'));
    }

    public function create()
    {
        return view('item_types.create');
    }

    public function store(Request $request)
    {
        ItemType::create([
            'item_type_name' => $request->item_type_name,
            'description' => $request->description
        ]);

        return redirect()->route('item-types.index');
    }

    public function edit(ItemType $itemType)
    {
        return view('item_types.edit', compact('itemType'));
    }

    public function update(Request $request, ItemType $itemType)
    {
        $itemType->update([
            'item_type_name' => $request->item_type_name,
            'description' => $request->description
        ]);

        return redirect()->route('item-types.index');
    }

  public function destroy($id)
{
    try {

        $itemType = ItemType::findOrFail($id);

        if ($itemType->items()->exists()) {

            return redirect()
                ->route('item-types.index')
                ->with(
                    'error',
                    'Item Type masih digunakan oleh data Item.'
                );
        }

        $itemType->delete();

        return redirect()
            ->route('item-types.index')
            ->with(
                'success',
                'Data berhasil dihapus.'
            );

    } catch (\Exception $e) {

        return redirect()
            ->route('item-types.index')
            ->with(
                'error',
                'Data gagal dihapus.'
            );
    }
}
}