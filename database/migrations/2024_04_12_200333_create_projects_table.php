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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->integer('width');
            $table->integer('height');
            $table->integer('qtd')->default(1);
            $table->string('line');
            $table->integer('ref')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('cliente_id'); // Chave estrangeira referenciando o campo 'id' da tabela 'clientes'
            $table->foreign('cliente_id')->references('id')->on('clients');
            $table->string('local')->nullable();
            $table->integer('folga_inst')->nullable();
            $table->boolean('contramarco')->default(false);
            $table->boolean('selected')->nullable();
            $table->string('color_esquadrias');
            $table->string('color_acessorio');
            $table->string('type_glass')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
