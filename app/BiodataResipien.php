<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiodataResipien extends Model
{

    protected $table = 'biodata_resipien'; //biodata_dosen
    protected $primaryKey = 'nir'; //nip
    public $incrementing = false;
    protected $fillable = [
    'nir', 
    'nama_bayi_resipien',
    'nama_ibu_resipien',
    'agama',
    'jenis_kelamin',
    'tanggal_lahir_bayi',
    'alamat',
    'kriteria',
   ];

 
}

  

