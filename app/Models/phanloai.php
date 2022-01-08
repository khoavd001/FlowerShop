<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phanloai extends Model
{
    use HasFactory;

    protected $fillable = [
        'BoHoa',
        'LoaiHoa',
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
