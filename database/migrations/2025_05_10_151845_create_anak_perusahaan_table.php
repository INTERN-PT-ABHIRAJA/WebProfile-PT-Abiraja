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
        Schema::create('anak_perusahaan', function (Blueprint $table) {
            $table->increments('id_anak_perusahaan');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_kategori')->nullable();
            $table->string('nama_perusahaan', 150);
            $table->text('deskripsi')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('foto', 255)->nullable();
            $table->string('video', 255)->nullable();
            $table->date('berdiri_sejak')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_perusahaan');
    }
};
