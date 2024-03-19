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
        Schema::create('inventory_batches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->integer('quantity_available')->nullable();
            $table->integer('quantity_ordered')->default(0);
            $table->string('batch_number')->nullable();
            $table->date('ordered_date')->nullable();
            $table->date('received_date')->nullable();
            $table->boolean('is_active')->nullable();
            $table->decimal('cost_price_per_unit', 8, 2);
            $table->decimal('landing_cost', 8, 2);
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_batches');
    }
};
