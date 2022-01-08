<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class YNghiaController extends Controller
{
    public function index()
    {
        return view('page.ynghiahoa.YNghiaHoa',[
            'title'=>'Ý nghĩa hoa',
        ]);
    }

    public function HoaCuc()
    {
        return view('page.ynghiahoa.HoaDongTien',[
            'title'=>'',
        ]);
    }

    public function HoaHong()
    {
        return view('page.ynghiahoa.HoaHong',[
            'title'=>'',
        ]);
    }

    public function HoaHuongDuong()
    {
        return view('page.ynghiahoa.HoaHuongDuong',[
            'title'=>'',
        ]);
    }

    public function HoaLan()
    {
        return view('page.ynghiahoa.HoaLan',[
            'title'=>'Hoa Lan',
        ]);
    }
}
