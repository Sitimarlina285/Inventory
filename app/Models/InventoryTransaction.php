<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryTransaction extends Model
{
    protected $primaryKey = 'inventory_transaction_id';

    protected $fillable = [
        'transaction_date',
        'transaction_number',
        'status',
        'start_date',
        'end_date',
        'evidence_file',
        'source_of_funds',
        'total_budget',
        'budget_realization',
        'transaction_type_id'
    ];

    public function transactionType()
    {
        return $this->belongsTo(
            TransactionType::class,
            'transaction_type_id'
        );
    }

    public function inventories()
    {
        return $this->hasMany(
            Inventory::class,
            'inventory_transaction_id'
        );
    }
}