<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    public function carrinho(){
        return $this->hasMany('App\Models\carrinho','comprador');
    }
}
