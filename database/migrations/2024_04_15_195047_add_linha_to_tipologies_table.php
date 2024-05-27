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
        Schema::table('tipologies', function (Blueprint $table) {
            //
            $table->string('line')->nullable()->after('img'); // Definindo a nova coluna 'linha'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tipologies', function (Blueprint $table) {
            //
        });
    }
};
