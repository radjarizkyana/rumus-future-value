<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('investasis', function (Blueprint $table) {
        $table->id();
        $table->double('pv'); // Nilai Awal (PV)
        $table->double('i');  // Tingkat Bunga (%)
        $table->integer('n'); // Jumlah Tahun
        $table->double('future_value'); // Future Value hasil perhitungan
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investasis');
    }
};
