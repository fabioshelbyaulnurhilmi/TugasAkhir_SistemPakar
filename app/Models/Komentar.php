<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'username',
        'nilai',
        'saran'
    ];
    public function chatToUser()
    {
        return $this->belongsTo(User::class, 'idUSer');
    }
}
