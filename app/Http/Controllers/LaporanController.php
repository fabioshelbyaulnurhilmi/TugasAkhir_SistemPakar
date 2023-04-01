<?php

namespace App\Http\Controllers;

use App\Models\BalasChat;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
 public function laporan()
 {
    $laporan = DB::table('laporans')->get();
    return view('admin.dataLaporan.laporan', ['laporan' => $laporan]);
 }

 public function laporangejala()
 {
    $laporangejala = DB::table('laporans')->get();
    return view('admin.dataLaporan.laporangejala', ['laporangejala' => $laporangejala]);
 }

 public function laporanpenyakit()
 {
    $laporanpenyakit = DB::table('laporans')->get();
    return view('admin.dataLaporan.laporanpenyakit', ['laporanpenyakit' => $laporanpenyakit]);
 }

 public function laporanobat()
 {
    $laporanobat = DB::table('laporans')->get();
    return view('admin.dataLaporan.laporanobat', ['laporanobat' => $laporanobat]);
 }

 public function detaillaporan($id)
 {
    $laporan = DB::table('laporans')->where('id', $id)->get();
    return view('admin.dataLaporan.detaillaporan', ['dlaporan' => $laporan]);
 }

 public function chat()
 {
    $chat = DB::table('chats')->get();
    return view('admin.dataLaporan.chat', ['chat' => $chat]);
 }

 public function komentar()
 {
    $komentar = DB::table('komentars')->get();
    return view('admin.dataLaporan.komentar', ['komentar' => $komentar]);
 }

 public function lihatlaporan()
 {
     return view('admin.dataLaporan.lihatlaporan');
 }

 public function lapgejala()
 {
     return view('admin.dataLaporan.laporangejala');
 }

 public function lappenyakit()
 {
     return view('admin.dataLaporan.laporanpenyakit');
 }

 public function lapobat()
 {
     return view('admin.dataLaporan.laporanobat');
 }



 public function balaschat($id)
 {
    $balaschat = Chat::where('idUser', $id)->get();
    return view('admin.dataLaporan.balaschat', ['balaschat' => $balaschat]);
 }
}
