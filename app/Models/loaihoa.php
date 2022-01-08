<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaihoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'BoHoa',
        'MaLoai',
        'TenBoHoa',
        'Gia',
        'Chitiet',
        'DipTang',
        'tinhtrang',
        'link',
        'ynghia',
    ];
}
