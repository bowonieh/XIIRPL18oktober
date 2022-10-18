<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    protected $model;
    public function __construct()
    {
        $this->model = new KategoriModel();
    }
    public function index(){
        //menampilkan seluruh kategori
        $data = $this->model->all();
        $list = [
            'kategori' => $data
        ];
        return view('listkategori',$list);
    }
    public function tambahform(){
        return view('tambahkategori');
    }
    public function save(Request $request){
        $data = [
            'id_kategori'   => $request->input('id_kategori'),
            'kategori'      => $request->input('kategori')
        ];
        //echo json_encode($data);
        
        //Simpan Ke Database
        $aksi = $this->model->create($data);
        if($aksi){
            echo "Data berhasil disimpan";
        }else{
            echo "Data gagal disimpan";
        }
        
    }
}
