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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('price', 9, 2);
            $table->text('description')->nullable();
            $table->unsignedBigInteger('sale')->nullable();
            $table->timestamps();

            $table->foreign('category')->references('id')->on('item_categories');
            $table->foreign('sale')->references('id')->on('item_sales');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
