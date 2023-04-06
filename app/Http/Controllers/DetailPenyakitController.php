<?php

namespace App\Http\Controllers;

use App\Models\detailDiagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\DetailPenyakit;
use App\Models\Diagnosa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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


    public function hasilDiagnosa($id)
    {
        $cek = Diagnosa::where('key',$id)->first();
    //   $diagnosa = detailDiagnosa::whereHas('DiagnosaRelasiDetail', function ($q) use ($cek) {
    //     $q->where('tanggal', $cek->tanggal);})->get();
    $diagnosa = Diagnosa::with('DiagnosaToDetail.RelasidetailPenyakit')->where('tanggal',$cek->tanggal)->get();

      return view('petani.menuDiagnosa.hasilDiagnosa',compact(['diagnosa']));
    }


    public function detailDiagnosa($id)
    {
        // $diagnosa = Diagnosa::whereHas('DiagnosaRelasiDetail', function ($q) use ($id) {
        //     $q->where('key', $id);})->get();
        $diagnosa = detailDiagnosa::where('key',$id)->get();
        $diagnosas = Diagnosa::with('DiagnosaToDetail')->whereHas('DiagnosaToDetail', function ($q) use ($id) {
                $q->where('key', $id);})->get();
        return view('petani.menuDiagnosa.detailDiagnosa',compact(['diagnosa','diagnosas']));
    }

    public function riwayatDiagnosa()
    {
    $diagnosa = Diagnosa::with('DiagnosaToDetail.RelasidetailPenyakit')->where('idUser',Auth::user()->idUser)->get();
    return view('petani.menuDiagnosa.hasilDiagnosa',compact(['diagnosa']));

    }



    public function generatePdf(Request $request)
    {
        // Get the HTML content from the request
        $html = $request->input('html');

        // Use html2canvas to generate an image from the HTML content
        $image = Image::make(html2canvas($html))->encode('jpg');

        // Use Dompdf to generate a PDF from the image
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
$name = 'diagnosa-'.Str::random(10);
        // Save the PDF to storage
        Storage::put('pdfs/'.$name.'.pdf', $pdf->output());

        return response()->download(storage_path('app/pdfs/'.$name.'.pdf'));
    }
}
