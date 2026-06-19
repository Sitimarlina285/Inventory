<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $primaryKey = 'inventory_id';

    protected $fillable = [
        'quantity',
        'price',
        'specification',
        'status',
        'photo',
        'description',
        'merk',
        'barcode',
        'expired_date',
        'item_id',
        'inventory_transaction_id'
    ];

    public function item()
    {
        return $this->belongsTo(
            Item::class,
            'item_id'
        );
    }

    public function transaction()
    {
        return $this->belongsTo(
            InventoryTransaction::class,
            'inventory_transaction_id'
        );
    }
}