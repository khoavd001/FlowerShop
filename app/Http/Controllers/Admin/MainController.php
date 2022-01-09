<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Show\TuVanService;

class MainController extends Controller
{
    protected $tuvanService;

    public function __construct(TuVanService $tuvanService)
    {
        $this->tuvanService=$tuvanService;
    }

    public function index()
    {
        return view('admin.home', [
            'title' => 'Trang Admin',
            'tuvan'=> $this->tuvanService->show(),
            'DoanhThu'=>$this->tuvanService->DoanhThu(),
            'DonHang'=>$this->tuvanService->DonHang(),
        ]);
    }

}
