<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->unsignedInteger('id_anak_perusahaan');
            $table->string('nama_produk', 150);
            $table->text('deskripsi_produk')->nullable();
            $table->decimal('harga', 15, 2);
            $table->integer('stok');
            $table->string('foto', 255)->nullable();
            $table->string('video', 255)->nullable();
            $table->timestamps();

            // Foreign key
            $table->foreign('id_anak_perusahaan')->references('id_anak_perusahaan')->on('anak_perusahaan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
