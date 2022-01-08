<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Services\Menu\LoaiHoaService;
use App\Models\loaihoa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected  $loaihoaService;

    public function __construct(LoaiHoaService $loaiHoaService)
    {
        $this->loaihoaService=$loaiHoaService;
    }

//    public function index( )
//    {
//        return view('page.Home',[
//            'title'=>'Trang chủ',
//            'bohoa'=> $this->loaihoaService->getParent(),
//        ]);
//    }
}
