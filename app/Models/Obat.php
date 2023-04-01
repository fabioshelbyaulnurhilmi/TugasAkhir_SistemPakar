<?php

namespace App\Models;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;


    use AutoNumberTrait;


    public function getAutoNumberOptions()
    {
        return [
            'idObat' => [
                'format' => 'S-?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 2 // The number of digits in an autonumber
            ]
        ];
    }
    protected $fillable = [
        'idPenyakit',
        'idObat',
        'namaObat',
        'gambarObat',
        'cara',
        'jenis',
        'khasiat'
    ];
    public function obatToPenyakit()
    {
        return $this->belongsTo(Penyakit::class, 'idPenyakit');
    }
}
