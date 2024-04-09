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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('cpf')->nullable(); 
            $table->bigInteger('ref')->nullable(); 
            $table->string('cep')->nullable();
            $table->string('city')->nullable();
            $table->string('street')->nullable(); //rua
            $table->string('uf')->nullable();
            $table->integer('number')->nullable(); 
            $table->string('district')->nullable(); //bairro
            $table->string('adjunct')->nullable(); //complemento
            $table->text('obs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
