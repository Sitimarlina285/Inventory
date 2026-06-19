<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryRoom extends Model
{
    protected $primaryKey = 'inventory_room_id';

    protected $fillable = [
        'inventory_id',
        'room_id',
        'quantity',
        'status',
        'inventory_date'
    ];

    public function inventory()
    {
        return $this->belongsTo(
            Inventory::class,
            'inventory_id'
        );
    }

    public function room()
    {
        return $this->belongsTo(
            Room::class,
            'room_id'
        );
    }
}