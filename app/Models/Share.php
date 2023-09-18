<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    protected $fillable = [
        'harga_sebelum_markup',
        'markup_persen',
        'share_persen',
        'net_untuk_resto',
        'share_untuk_ojol'
    ];
}
