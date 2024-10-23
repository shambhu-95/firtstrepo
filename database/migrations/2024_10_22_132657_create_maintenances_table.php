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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bikecar_id')->nullable();
            $table->Date('maintenance_date');
            $table->text('issue_reported');
            $table->float('repair_cost');
            $table->unsignedBigInteger('locat_id')->nullable();
            $table->foreign('bikecar_id')->references('id')->on('products')->onDelete('SET NULL');
            $table->foreign('locat_id')->references('id')->on('locations')->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenances');
    }
};
