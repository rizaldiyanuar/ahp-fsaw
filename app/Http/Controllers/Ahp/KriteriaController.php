<?php

namespace App\Http\Controllers\Ahp;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Kriteria;

class KriteriaController extends Controller
{
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'kriteria',
        ];

        // Memanggil tampilan index di folder views dan juga menambahkan $data tadi di view
        return view('ahp.kriteria.index',$data);
    }

    public function combo() {
        $data = Kriteria::lists('value', 'deskripsi');
        return View::make('combo')->with('dcom', $data);
      }
}
