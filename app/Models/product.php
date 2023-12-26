<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public $table = 'product';
    protected $fillable = [
        'tema',
        'judul',
        'penulis',
        'deskripsi'
    ];

}
