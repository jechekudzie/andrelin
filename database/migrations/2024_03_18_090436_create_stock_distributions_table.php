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
        Schema::create('stock_distributions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('organisation_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('inventory_batch_id');
            $table->string('batch_number')->nullable();
            $table->integer('quantity');//this is quantity issued
            $table->integer('quantity_available');
            $table->date('date_issued')->nullable();
            $table->enum('distribution_type', ['general', 'transfer']);
            $table->unsignedBigInteger('source_organisation_id')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_distributions');
    }
};
