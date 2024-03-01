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
        Schema::table('users', function (Blueprint $table) {
            $table->string('numero_cni');
            $table->string('cni_file');
            $table->string('telephone');
            $table->string('adresse');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('numero_cni');
            $table->dropColumn('cni_file');
            $table->dropColumn('telephone');
            $table->dropColumn('adresse');
        });
    }
};
