<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'idUser',
        'username',
        'isi',
        'tanggal',
        'balas'
    ];
    public function chatToUser()
    {
        return $this->belongsTo(User::class, 'idUSer');
    }
    public function chatToBalasChat()
    {
        return $this->hasMany(BalasChat::class, 'idChat');
    }
}
