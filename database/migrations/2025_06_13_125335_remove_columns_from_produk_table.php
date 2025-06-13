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
        Schema::table('produk', function (Blueprint $table) {
            // Dropping the columns
            $table->dropColumn(['video', 'harga', 'stok']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            // Recreating the columns if we need to rollback
            $table->decimal('harga', 15, 2)->nullable();
            $table->integer('stok')->nullable();
            $table->string('video', 255)->nullable();
        });
    }
};
