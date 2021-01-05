<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carrinho extends Migration
{

    public function up()
    {
        Schema::create('carrinho', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comprador');
            $table->unsignedBigInteger('produto');
            $table->integer('quantidade');
            $table->integer('preco_unitario');
            $table->integer('preco_total');
            $table->string('cod_rastreio')->nullable();
            $table->string('entregador')->nullable();
            $table->string('entrega')->nullable();
            $table->timestamps();
            $table->foreign('comprador')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('produto')->references('id')->on('produtos')->onDelete('cascade');
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('carrinho');
    }
}
