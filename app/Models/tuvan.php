<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuvan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'PhuongThuc',
        'ThongTin',
        'NoiDung',
    ];
}
