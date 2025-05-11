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
        Schema::table('users', function (Blueprint $table) {
            // Check if columns exist before modifying
            if (Schema::hasColumn('users', 'name')) {
                $table->renameColumn('name', 'nama');
            }

            if (Schema::hasColumn('users', 'id') && !Schema::hasColumn('users', 'id_user')) {
                $table->renameColumn('id', 'id_user');
            }

            // Add columns only if they don't exist
            if (!Schema::hasColumn('users', 'role')) {
                $table->enum('role', ['admin', 'owner', 'customer'])->default('customer');
            }

            if (!Schema::hasColumn('users', 'alamat')) {
                $table->text('alamat')->nullable();
            }

            if (!Schema::hasColumn('users', 'telepon')) {
                $table->string('telepon', 20)->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Reverse the changes
            if (Schema::hasColumn('users', 'id_user') && !Schema::hasColumn('users', 'id')) {
                $table->renameColumn('id_user', 'id');
            }

            if (Schema::hasColumn('users', 'nama')) {
                $table->renameColumn('nama', 'name');
            }

            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }

            if (Schema::hasColumn('users', 'alamat')) {
                $table->dropColumn('alamat');
            }

            if (Schema::hasColumn('users', 'telepon')) {
                $table->dropColumn('telepon');
            }
        });
    }
};
