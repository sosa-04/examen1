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
        Schema::create('_vuelos__asientos', function (Blueprint $table) {
            $table->integer('idTipoAsiento')->primary();
            $table->string('numeroVuelo',5);
            $table->string('numeroAsiento',5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_vuelos__asientos');
    }
};
