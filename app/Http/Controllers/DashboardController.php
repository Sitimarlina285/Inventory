<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use App\Models\Item;
use App\Models\Building;
use App\Models\Room;
use App\Models\Inventory;
use App\Models\InventoryRoom;
use App\Models\InventoryTransaction;

class DashboardController extends Controller
{
    public function index()
    {
        $itemTypes = ItemType::count();
        $items = Item::count();
        $buildings = Building::count();
        $rooms = Room::count();

        $inventories = Inventory::count();

        $transactions =
            InventoryTransaction::count();

        $inventoryRooms =
            InventoryRoom::count();

        $totalBudget =
            InventoryTransaction::sum(
                'total_budget'
            );

        $totalRealization =
            InventoryTransaction::sum(
                'budget_realization'
            );

        return view(
            'dashboard',
            compact(
                'itemTypes',
                'items',
                'buildings',
                'rooms',
                'inventories',
                'transactions',
                'inventoryRooms',
                'totalBudget',
                'totalRealization'
            )
        );
    }
}