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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->longText('description')->nullable();

            $table->double('customer_price',8,2)->nullable();
            $table->double('dealer_price',8,2)->nullable();
            $table->boolean('on_discount')->default(0);
            $table->double('discount_percentage',5,2)->nullable();

            $table->boolean('published')->default(1);
            $table->string('slug')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
