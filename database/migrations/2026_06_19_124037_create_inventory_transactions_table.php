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
    Schema::create('inventory_transactions', function (Blueprint $table) {

        $table->id('inventory_transaction_id');

        $table->date('transaction_date');

        $table->string('transaction_number');

        $table->string('status');

        $table->date('start_date')->nullable();

        $table->date('end_date')->nullable();

        $table->string('evidence_file')->nullable();

        $table->string('source_of_funds')->nullable();

        $table->decimal('total_budget', 15, 2)->default(0);

        $table->decimal('budget_realization', 15, 2)->default(0);

        $table->foreignId('transaction_type_id')
            ->constrained('transaction_types', 'transaction_type_id');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_transactions');
    }
};