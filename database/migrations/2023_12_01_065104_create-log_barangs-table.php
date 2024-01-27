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
        Schema::create('log_barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');
            $table->foreignId('log_id');
            // $table->foreignId('barang_id');
            $table->integer('qty');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->foreign('log_id')->references('id')->on('logs')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_barangs');
    }
};
