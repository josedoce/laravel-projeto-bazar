<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produtos extends Migration
{
    
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vendedor');
            $table->string('cod');
            $table->string('img')->default('produto.svg');
            $table->string('produto');
            $table->integer('preco');
            $table->integer('desconto')->default(0);
            $table->text('descricao');
            $table->integer('estoque')->default(0);
            $table->timestamps();
            $table->foreign('vendedor')->references('id')->on('vendedores')->onDelete('cascade');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
