<?php 

namespace App\Http\Controllers\Resipien;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Session;
use Validator;
use Reqsponse;
// Tambahkan model yang ingin dipakai

use App\Resipien;
use App\BiodataResipien;
use App\User;
use Auth;

class BiodataResipienController extends Controller
{

    // Function untuk menampilkan tabel
    public function index()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata-resipien',
            // Memanggil semua isi dari tabel biodata resipien
            'resipien' => BiodataResipien::all()
        ];

        // Memanggil tampilan index di folder views/dosen/biodata-dosen dan juga menambahkan $data tadi di view
        return view('resipien.biodata-resipien.index',$data);
    }

   

    public function create()
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata-resipien',
        ];

        // Memanggil tampilan form create
        return view('resipien.biodata-resipien.create',$data);
    }

    public function createAction(Request $request)
    {
        // Menginsertkan apa yang ada di form ke dalam tabel biodata
        $resipien = $request->input();
        $this->validate($request, [
        'password'              => 'confirmed|min:6'
        ]);
        $password=bcrypt($request->input('password'));
        Resipien::create($resipien);
        BiodataResipien::create($resipien); 
        // User::create([ //resipien
        //     'username' => $request->input('nir'),
        //     'name' => $request->input('nama_dosen'),
        //     'role' => 'dosen', //resipien
        //     'email' => $request->input('email'),
        //     'password'=> $password , 
        //     ]);  
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Resipien Berhasil Ditambahkan');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('resipien/biodata-resipien');
    }

    public function delete($nir)
    {
        // Mencari biodata berdasarkan id dan memasukkannya ke dalam variabel $biodata
        $resipien = BiodataResipien::where('nir',$nir);
        $resipien1 = Resipien::find($nir);
        $resipien2= User::where('username',$nir)->delete();
        // Menghapus biodata yang dicari tadi
        $resipien->delete();
        $resipien1->delete();

       
        // Menampilkan notifikasi pesan sukses
        Session::put('alert-success', 'Data Resipien Berhasil Dihapus');

        // Kembali ke halaman sebelumnya
        return Redirect::back();     
    }

   public function edit($nir)
    {
        $data = [
            // Buat di sidebar, biar ketika diklik yg aktif sidebar biodata
            'page' => 'biodata-resipien',
            // Mencari biodata berdasarkan id
            'resipien' => BiodataResipien::find($nir),
            'user' => User::where('username',$nir)->first(),
        ];

        // Menampilkan form edit dan menambahkan variabel $data ke tampilan tadi, agar nanti value di formnya bisa ke isi
        return view('resipien.biodata-resipien.edit',$data);
    }

    public function editAction($nir, Request $request)
    {
        // Mencari biodata yang akan di update dan menaruhnya di variabel $biodata 
        $resipien1 = Resipien::find($nir);
        $resipien2 = User::where('username',$nir)->first();

        // Mengupdate $biodata tadi dengan isi dari form edit tadi
        $resipien1->nir = $request->input('nir');
        $resipien2->username = $request->input('nir');
        $resipien2->email = $request->input('email');
        $resipien2->name = $request->input('nama_resipien');
        $resipien = BiodataResipien::find($nir);
        $resipien->nir = $request->input('nir');
        $resipien->nama_resipien = $request->input('nama_resipien');
        $resipien->alamat = $request->input('alamat');
        $resipien->tanggal_lahir_resipien = $request->input('tanggal_lahir_resipien');
        $resipien2->save();
        $resipien1->save();
        $resipien->save();

        // Notifikasi sukses
        Session::put('alert-success', 'Data Resipien Berhasil Diedit');

        // Kembali ke halaman mahasiswa/biodata
        return Redirect::to('resipien/biodata-resipien');
    }

}