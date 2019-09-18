<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resipien extends Model
{

    public $incrementing = false;
    protected $table = 'resipien';    
    protected $primaryKey = 'nir';    
    protected $fillable = [
		'nir'
			
   ];
}