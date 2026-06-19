<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    protected $primaryKey =
        'transaction_type_id';

    protected $fillable = [
        'transaction_type_name'
    ];

    public function transactions()
    {
        return $this->hasMany(
            InventoryTransaction::class,
            'transaction_type_id'
        );
    }
}