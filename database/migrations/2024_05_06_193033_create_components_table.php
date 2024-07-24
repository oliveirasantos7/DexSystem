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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string('component')->nullable();
            $table->string('img')->nullable();
            $table->bigInteger('qtd')->nullable();
            $table->string('descri')->nullable();
            $table->unsignedBigInteger('client_id'); // Chave estrangeira referenciando o campo 'id' da tabela 'clientes'
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('project_id'); // Chave estrangeira referenciando o campo 'id' da tabela 'clientes'
            $table->foreign('project_id')->references('id')->on('projects');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *  'component',
        'img',
        'qtd',
        'desc',
        'project_id',
        'client_id',
     */
    public function down(): void
    {
        Schema::dropIfExists('components');
    }
};
