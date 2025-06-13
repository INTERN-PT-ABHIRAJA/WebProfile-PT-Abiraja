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
        // Drop the existing benefits table if it exists
        Schema::dropIfExists('benefits');

        // Recreate the benefits table with correct column types
        Schema::create('benefits', function (Blueprint $table) {
            $table->increments('id_benefit'); // Use increments() instead of id() to match produk table's primary key type
            $table->unsignedInteger('id_produk');
            $table->string('nama_benefit');
            $table->timestamps();
            
            // Add foreign key
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
        Schema::dropIfExists('benefits');
    }
};
