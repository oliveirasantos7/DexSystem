<?php

use App\Models\Client;
use App\Models\Project;
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
        Schema::create('cutting_designs', function (Blueprint $table) {
            $table->id();
            $table->string('profile');
            $table->string('descri_profile');
            $table->string('qtd_profile');
            $table->string('size');
            $table->string('pos');
            $table->string('cut');
            $table->string('qtd_mt');
            $table->string('qtd_bars');
            $table->string('weight_mt');
            $table->string('weight_bars');
            $table->foreignIdFor(Project::class)->references('id')->on('projects')->onDelete('CASCADE');
            $table->foreignIdFor(Client::class)->references('id')->on('clients')->onDelete('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutting_designs');
    }
};
