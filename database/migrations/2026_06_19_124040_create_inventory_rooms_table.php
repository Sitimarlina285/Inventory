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
    Schema::create('inventory_rooms', function (Blueprint $table) {

        $table->id('inventory_room_id');

        $table->string('status');

        $table->date('inventory_date');

        $table->foreignId('inventory_id')
            ->constrained('inventories', 'inventory_id');

        $table->foreignId('room_id')
            ->constrained('rooms', 'room_id');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_rooms');
    }
};