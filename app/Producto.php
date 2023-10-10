<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = 'productos';
  protected $primaryKey = 'codi_prod';
  public $incrementing = false;
  public $timestamps = false;
}
