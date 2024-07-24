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
        Schema::create('glasses', function (Blueprint $table) {
            $table->id();
            $table->string('type_glss')->nullable();
            $table->bigInteger('width')->nullable();
            $table->bigInteger('height')->nullable();
            $table->bigInteger('qtd')->nullable();
            $table->unsignedBigInteger('client_id'); // Chave estrangeira referenciando o campo 'id' da tabela 'clientes'
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('project_id'); // Chave estrangeira referenciando o campo 'id' da tabela 'clientes'
            $table->foreign('project_id')->references('id')->on('projects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *  'type_glass',
        'width',
        'height',
        'qtd',
        'project_id',
        'client_id',
     */
    public function down(): void
    {
        Schema::dropIfExists('glasses');
    }
};
