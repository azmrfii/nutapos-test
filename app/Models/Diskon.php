<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_sebelum_diskon',
        'total_diskon',
        'total_harga_diskon',
        'total_harga_setelah_diskon',
    ];
}
