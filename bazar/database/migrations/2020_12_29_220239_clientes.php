<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email');
            $table->string('senha');
            $table->string('img')->default('anonimo.svg');
            $table->string('cpf')->nullable();
            $table->string('titular')->nullable();
            $table->string('cartao')->nullable();
            $table->text('endereco')->nullable();
            $table->integer('apto_comprador')->default(0);
            $table->integer('salve')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
