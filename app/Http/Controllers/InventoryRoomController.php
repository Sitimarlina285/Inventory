<?php

namespace App\Http\Controllers;

use App\Models\InventoryRoom;
use App\Models\Inventory;
use App\Models\Room;
use Illuminate\Http\Request;

class InventoryRoomController extends Controller
{
    public function index()
    {
        $inventoryRooms =
            InventoryRoom::with([
                'inventory.item',
                'room.building'
            ])->get();

        return view(
            'inventory_rooms.index',
            compact('inventoryRooms')
        );
    }

    public function create()
    {
        $inventories = Inventory::with('item')->get();
        $rooms = Room::with('building')->get();

        return view(
            'inventory_rooms.create',
            compact(
                'inventories',
                'rooms'
            )
        );
    }

    public function store(Request $request)
    {
        InventoryRoom::create([

            'inventory_id' =>
                $request->inventory_id,

            'room_id' =>
                $request->room_id,

            'quantity' =>
                $request->quantity,

            'status' =>
                $request->status,

            'inventory_date' =>
                $request->inventory_date

        ]);

        return redirect()
            ->route('inventory-rooms.index');
    }

    public function edit($id)
    {
        $inventoryRoom =
            InventoryRoom::findOrFail($id);

        $inventories =
            Inventory::with('item')->get();

        $rooms =
            Room::with('building')->get();

        return view(
            'inventory_rooms.edit',
            compact(
                'inventoryRoom',
                'inventories',
                'rooms'
            )
        );
    }

    public function update(
        Request $request,
        $id
    )
    {
        $inventoryRoom =
            InventoryRoom::findOrFail($id);

        $inventoryRoom->update([
            'inventory_id' => $request->inventory_id,
            'room_id' => $request->room_id,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'inventory_date' => $request->inventory_date
        ]);

        return redirect()
            ->route('inventory-rooms.index');
    }

    public function destroy($id)
    {
        InventoryRoom::findOrFail($id)
            ->delete();

        return redirect()
            ->route('inventory-rooms.index');
    }
}