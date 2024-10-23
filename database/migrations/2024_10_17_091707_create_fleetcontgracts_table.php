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
        Schema::create('fleetcontgracts', function (Blueprint $table) {
            $table->id();
            $table->integer('rentbyhour');
            $table->Date('rentstartdate');
            $table->Date('rentenddate');
            $table->string('vehicle');
            $table->string('sales_person');
            $table->string('attachment');
            $table->string('firstpayment');
            $table->string('fleet_color');
            $table->string('fleet_brand');
            $table->integer('recurring_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fleetcontgracts');
    }
};
