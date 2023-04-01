<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Cviebrock\EloquentSluggable\Sluggable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Sluggable;



    public function sluggable(): array
    {

        return [
            'key' => [
                'source' => 'fullname'
            ]
        ];
    }
    public function getFullnameAttribute(): string
    {
        return $this->userRole . ' ' . $this->namaPengguna;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'idUser',
        'namaPengguna',
        'jenisKelamin',
        'username',
        'password',
        'alamat',
        'userRole',
        'gambar'
    ];
    // use AutoNumberTrait;
    // public function getAutoNumberOptions()
    // {
    //     // if ($this->userRole == 'admin' | 'pemilik') {
    //     //     $u = 'Admin';
    //     // } else {
    //     //     $u = 'Petani';
    //     // }
    //     // ;
    //     return [
    //         'idUser' => [
    //             'format' => $this->userRole . '-?',
    //             // autonumber format. '?' will be replaced with the generated number.
    //             'length' => 2 // The number of digits in an autonumber
    //         ]
    //     ];
    // }
    public function userToChat()
    {
        return $this->hasMany(Chat::class, 'idUser');
    }
    public function userToKomentar()
    {
        return $this->hasMany(Komentar::class, 'idUser');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'id' => 'string',
    ];
}
