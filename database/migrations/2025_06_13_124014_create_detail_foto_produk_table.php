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
        Schema::create('detail_foto_produk', function (Blueprint $table) {
            $table->increments('id_foto'); // Using increments to match the data type of id_produk
            $table->unsignedInteger('id_produk');
            $table->string('foto', 255);
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('id_produk')
                  ->references('id_produk')
                  ->on('produk')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_foto_produk');
    }
};
