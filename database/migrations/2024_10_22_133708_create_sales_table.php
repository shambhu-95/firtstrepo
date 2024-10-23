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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cust_id')->nullable();
            $table->unsignedBigInteger('inventory_id')->nullable();
            $table->Date('sales_date');
            $table->unsignedBigInteger('loc_id')->nullable();
            $table->float('quantity');
            $table->float('total_amount');
            $table->foreign('cust_id')->references('id')->on('customers')->onDelete('SET NULL');
            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('SET NULL');
            $table->foreign('loc_id')->references('id')->on('locations')->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
