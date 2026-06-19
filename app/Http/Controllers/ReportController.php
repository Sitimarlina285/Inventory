<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryRoom;
use App\Models\InventoryTransaction;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }

    public function inventory()
    {
        $inventories = Inventory::with('item')->get();

        return view(
            'reports.inventory',
            compact('inventories')
        );
    }

    public function transactions()
    {
        $transactions =
            InventoryTransaction::with(
                'transactionType'
            )->get();

        return view(
            'reports.transactions',
            compact('transactions')
        );
    }

    public function distribution()
    {
        $distributions =
            InventoryRoom::with([
                'inventory.item',
                'room.building'
            ])->get();

        return view(
            'reports.distribution',
            compact('distributions')
        );
    }

    public function budget()
    {
        $transactions =
            InventoryTransaction::all();

        $totalBudget =
            InventoryTransaction::sum(
                'total_budget'
            );

        $totalRealization =
            InventoryTransaction::sum(
                'budget_realization'
            );

        return view(
            'reports.budget',
            compact(
                'transactions',
                'totalBudget',
                'totalRealization'
            )
        );
    }
}