<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{

    protected $table = 'kriteria';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
    'id',
    'value', 
    'deskripsi',
   ];

 
}

  

