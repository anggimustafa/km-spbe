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
        Schema::table('posts', function (Blueprint $table) {
            // Menambahkan kolom opd_id yang berfungsi sebagai foreign key
            $table->unsignedBigInteger('opd_id')->nullable()->after('id');

            // Menambahkan foreign key constraint jika perlu
            $table->foreign('opd_id')->references('id')->on('opds')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Menghapus foreign key constraint terlebih dahulu
            $table->dropForeign(['opd_id']);

            // Menghapus kolom opd_id
            $table->dropColumn('opd_id');
        });
    }
};
