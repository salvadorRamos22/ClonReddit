<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

     protected $table= 'posts'; //MODELO PARA INSERTAR DATOS

     protected $fillabel=['title','descripcion','url'];
} 

