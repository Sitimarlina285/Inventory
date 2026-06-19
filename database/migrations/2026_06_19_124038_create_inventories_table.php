<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('inventories', function (Blueprint $table) {

        $table->id('inventory_id');

        $table->integer('quantity');

        $table->decimal('price', 15, 2);

        $table->text('specification')->nullable();

        $table->string('status')->default('Active');

        $table->string('photo')->nullable();

        $table->text('description')->nullable();

        $table->string('merk')->nullable();

        $table->string('barcode')->unique();

        $table->date('expired_date')->nullable();

        $table->foreignId('item_id')
            ->constrained('items', 'item_id');

        $table->foreignId('inventory_transaction_id')
            ->constrained('inventory_transactions', 'inventory_transaction_id');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};