<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vendedores extends Migration
{
    
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->id();
            $table->string('loja');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('img')->default('anonimo.svg');
            $table->string('email');
            $table->string('senha');
            $table->string('cpf');
            $table->string('cnpj');
            $table->string('banco');
            $table->string('agencia');
            $table->string('conta');
            $table->string('tipo_conta');
            $table->text('endereco');
            $table->timestamps();
            
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('vendedores');
    }
}
