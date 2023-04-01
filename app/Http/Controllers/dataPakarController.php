<?php

namespace App\Http\Controllers;

use App\Models\DetailPenyakit;
use App\Models\Gejala;
use App\Models\Obat;
use App\Models\Penyakit;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataPakarController extends Controller
{
    public function datagejala()
    {
        $gejala = DB::table('gejalas')->get();
        return view('admin.dataPakar.datagejala', ['gejala' => $gejala]);
    }

    public function editGejala($id)
    {
        $editGejala = Gejala::where('key', $id)->first();
        return view('admin.dataPakar.editGejala', ['editGejala' => $editGejala]);
    }

    public function datapenyakit()
    {
        $penyakit = DB::table('penyakits')->get();
        return view('admin.dataPakar.datapenyakit', ['penyakit' => $penyakit]);
    }

    public function editPenyakit($id)
    {
        $editPenyakit = Penyakit::where('key', $id)->first();
        return view('admin.dataPakar.editPenyakit', ['editPenyakit' => $editPenyakit]);
    }

    public function dataobat()
    {
        $obat = Obat::with('obatToPenyakit')->get();
        return view('admin.dataPakar.dataobat', ['obat' => $obat]);
    }
    public function editObat($id)
    {
        $editObat = Obat::with('obatToPenyakit')->where('idObat', $id)->first();
        $Datapenyakit = Penyakit::all();
        return view('admin.dataPakar.editObat', [
        'editObat' => $editObat,
        'Datapenyakit'=>$Datapenyakit]);
    }

    public function tambahGejala()
    {
        $idGej = Gejala::orderBy('idGejala', 'desc')->first();
        return view('admin.dataPakar.tambahGejala',['idGej'=>$idGej]);
    }


    public function tambahPenyakit()
    {
        $idPen = Penyakit::orderBy('idPenyakit', 'desc')->first();
        return view('admin.dataPakar.tambahPenyakit',['idPen'=>$idPen]);
    }


    public function tambahObat()
    {
        $idObt = Obat::orderBy('id', 'desc')->first();
        $Datapenyakit = Penyakit::all();
        return view('admin.dataPakar.tambahObat',[
        'idObt'=>$idObt,
        'Datapenyakit'=>$Datapenyakit]);
    }


    #------------------------------ BAGIAN GEJALA ---------------------------------
    public function simpanGejala(Request $request)
    {

        $this->validate($request, [
            'idGejala' => 'required',
            'namaGejala' => 'required',
            'gambarGejala' => 'required',
        ], [
            'idGejala.required' => 'Gejala tidak boleh kosong.',
            'namaGejala.required' => 'Gejala tidak boleh kosong.',
            'gambarGejala.required' => 'Gambar gejala tidak boleh kosong',

        ]);

        $image_name = uniqid() . '.' . $request->gambarGejala->getClientOriginalExtension();
        $image_path = 'imagesGejala/' . $image_name;
        Image::make($request->gambarGejala->getRealPath())->fit(500, 500)->save(storage_path('app/public/'.$image_path));

        Gejala::create([
            'idGejala'=>$request->idGejala,
            'namaGejala'=>$request->namaGejala,
            'gambarGejala'=> $image_path,
            'key'=> ' ',
        ]);
        Alert::success('Berhasil','Menambahkan Data Gejala');
        return redirect()->route('data-gejala')
                        ->with('success',' created successfully.');
    }

    public function updateGejala(Request $request)
    {
        $this->validate($request, [
            'idGejala' => 'required',
            'namaGejala' => 'required',
            // 'gambarGejala' => 'required',
        ], [
            'idGejala.required' => 'Gejala tidak boleh kosong.',
            'namaGejala.required' => 'Gejala tidak boleh kosong.',
            'gambarGejala.required' => 'Gambar gejala tidak boleh kosong',

        ]);

$dGejala = Gejala::where('id',$request->id)->first();

        $dGejala->update([
            'idGejala'=>$request->idGejala,
            'namaGejala'=>$request->namaGejala,
            // 'gambarGejala'=>$request->gambarGejala,
        ]);
        Alert::success('Berhasil','Mengubah Data Gejala');

        return redirect()->route('data-gejala')
        ->with('success',' created successfully.');
    }
    public function deleteGejala(Request $request,$id)
    {
        Gejala::find($id)->delete();

        Alert::success('Berhasil','Menghapus Data Gejala');

        return redirect()->route('data-gejala')
        ->with('success',' created successfully.');
    }

    #------------------------ BAGIAN PENYAKIT ------------------------
    public function simpanPenyakit(Request $request)
    {

        $this->validate($request, [
            'idPenyakit' => 'required',
            'namaPenyakit' => 'required',
            'gambar' => 'required',
            'keterangan' => 'required',
            'solusi' => 'required',
        ], [
            'idPenyakit.required' => 'id penyakit tidak boleh kosong.',

            'namaPenyakit.required' => 'Penyakit tidak boleh kosong.',

            'gambar.required' => 'Gambar penyakit tidak boleh kosong',

            'keterangan.required' => 'Keterangan tidak boleh kosong',

            'solusi.required' => 'Solusi tidak boleh kosong',

        ]);

        $image_name = uniqid() . '.' . $request->gambar->getClientOriginalExtension();
        $image_path = 'imagesPenyakit/' . $image_name;
        Image::make($request->gambar->getRealPath())->fit(500, 500)->save(storage_path('app/public/'.$image_path));

        Penyakit::create([
            'idPenyakit'=>$request->idPenyakit,
            'namaPenyakit'=>$request->namaPenyakit,
            'gambar'=> $image_path,
            'keterangan'=>$request->keterangan,
            'solusi'=>$request->solusi,
            'key'=> ' ',
        ]);
        Alert::success('Berhasil','Menambahkan Data Penyakit');
        return redirect()->route('data-penyakit')
                        ->with('success',' created successfully.');
    }

    public function updatePenyakit(Request $request)
    {
        $this->validate($request, [
            'idPenyakit' => 'required',
            'namaPenyakit' => 'required',
            // 'gambar' => 'required',
            'keterangan' => 'required',
            'solusi' => 'required',
        ], [
            'idPenyakit.required' => 'id penyakit tidak boleh kosong.',

            'namaPenyakit.required' => 'Penyakit tidak boleh kosong.',

            'gambar.required' => 'Gambar penyakit tidak boleh kosong',

            'keterangan.required' => 'Keterangan tidak boleh kosong',

            'solusi.required' => 'Solusi tidak boleh kosong',

        ]);

$dPenyakit = Penyakit::where('id',$request->id)->first();

        $dPenyakit->update([
            'idPenyakit'=>$request->idPenyakit,
            'namaPenyakit'=>$request->namaPenyakit,
            // 'gambar'=>$request->gambar,
            'keterangan'=>$request->keterangan,
            'solusi'=>$request->solusi,
            'key'=> ' ',
        ]);
        Alert::success('Berhasil','Mengubah Data Penyakit');

        return redirect()->route('data-penyakit')
        ->with('success',' created successfully.');
    }
    public function deletePenyakit(Request $request,$id)
    {
        Penyakit::find($id)->delete();

        Alert::success('Berhasil','Menghapus Data Penyakit');

        return redirect()->route('data-penyakit')
        ->with('success',' created successfully.');
    }

    #------------------------------- BAGIAN OBAT--------------------------

    public function simpanObat(Request $request)
    {

        $this->validate($request, [
            'idObat' => 'required',
            'idPenyakit' => 'required',
            'namaObat' => 'required',
            'gambarObat' => 'required',
            'cara' => 'required',
            'jenis' => 'required',
            'khasiat' => 'required',
        ], [

            'idObat.required' => 'id obat tidak boleh kosong',

            'idPenyakit.required' => 'id penyakit tidak boleh kosong.',

            'namaObat.required' => 'Obat tidak boleh kosong.',

            'gambarObat.required' => 'Gambar obat tidak boleh kosong',

            'cara.required' => 'cara penggunaan tidak boleh kosong',

            'jenis.required' => 'jenis obat tidak boleh kosong',

            'khasiat.required' => 'khasiat obat tidak boleh kosong',

        ]);

        $image_name = uniqid() . '.' . $request->gambarObat->getClientOriginalExtension();
        $image_path = 'imagesObat/' . $image_name;
        Image::make($request->gambarObat->getRealPath())->fit(500, 500)->save(storage_path('app/public/'.$image_path));

        Obat::create([
            'idObat'=>$request->idObat,
            'idPenyakit'=>$request->idPenyakit,
            'namaObat'=>$request->namaObat,
            'gambarObat'=> $image_path,
            'cara'=>$request->cara,
            'jenis'=>$request->jenis,
            'khasiat'=>$request->khasiat,
        ]);
        Alert::success('Berhasil','Menambahkan Data Obat');
        return redirect()->route('data-obat')
                        ->with('success',' created successfully.');
    }

    public function updateObat(Request $request)
    {
        $this->validate($request, [
            'idObat' => 'required',
            'idPenyakit' => 'required',
            'namaObat' => 'required',
            // 'gambarObat' => 'required',
            'cara' => 'required',
            'jenis' => 'required',
            'khasiat' => 'required',
        ], [

            'idObat.required' => 'id obat tidak boleh kosong',

            'idPenyakit.required' => 'id penyakit tidak boleh kosong.',

            'namaObat.required' => 'Obat tidak boleh kosong.',

            'gambarObat.required' => 'Gambar obat tidak boleh kosong',

            'cara.required' => 'cara penggunaan tidak boleh kosong',

            'jenis.required' => 'jenis obat tidak boleh kosong',

            'khasiat.required' => 'khasiat obat tidak boleh kosong',

        ]);

$dObat = Obat::where('id',$request->id)->first();

        $dObat->update([
            'idObat'=>$request->idObat,
            'idPenyakit'=>$request->idPenyakit,
            'namaObat'=>$request->namaObat,
            // 'gambarObat'=> $request->gambarObat,
            'cara'=>$request->cara,
            'jenis'=>$request->jenis,
            'khasiat'=>$request->khasiat,
        ]);
        Alert::success('Berhasil','Mengubah Data Obat');

        return redirect()->route('data-obat')
        ->with('success',' created successfully.');
    }
    public function deleteObat(Request $request,$id)
    {
        Obat::find($id)->delete();

        Alert::success('Berhasil','Menghapus Data Obat');

        return redirect()->route('data-obat')
        ->with('success',' created successfully.');
    }

}
