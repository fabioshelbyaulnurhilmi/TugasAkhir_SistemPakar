<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\DetailPenyakit;
use Illuminate\Http\Request;

class DetailPenyakitController extends Controller
{
    public function index()
    {

        $data1 = Penyakit::all();
        $data2 = Gejala::all();
        $data3 = DetailPenyakit::all();
        return view('coba',[
            'penyakit' => $data1,
            'gejala' => $data2,
            'detailpenyakit' => $data3
        ]);
    }
}
