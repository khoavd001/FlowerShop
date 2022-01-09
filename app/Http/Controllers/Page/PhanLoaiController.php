<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Show\PhanLoaiService;
use App\Models\phanloai;

class PhanLoaiController extends Controller
{
    protected $phanloaiService;

    public function __construct(PhanLoaiService $phanLoaiService)
    {
        $this->phanloaiService=$phanLoaiService;
    }

    public function index()
    {
        return view('page.loaihoa.LoaiHoa',[
            'title'=>'Loai Hoa',
            'BoHoa'=>$this->phanloaiService->getBH(),
        ]);
    }

    public function HoaHong()
    {
        return view('page.loaihoa.HoaHong',[
            'title'=>'Hoa Hồng',
            'BoHoa'=>$this->phanloaiService->getBH(),
            'GioHoa'=>$this->phanloaiService->getGH(),
            'HopHoa'=>$this->phanloaiService->getHH(),
            'ChucMung'=>$this->phanloaiService->getCM(),
        ]);
    }

    public function HoaDongTien()
    {
        return view('page.loaihoa.HoaDongTien',[
            'title'=>'Hoa Đồng Tiền',
            'BHDongTien'=>$this->phanloaiService->getBHDT(),
            'GHDongTien'=>$this->phanloaiService->getGHDT(),
            'LHDongTien'=>$this->phanloaiService->getLHDT(),
            'CMDongTien'=>$this->phanloaiService->getCMDT(),
        ]);
    }

    public function HoaLan()
    {
        return view('page.loaihoa.HoaLan',[
            'title'=>'Hoa Lan',
            'GHLan'=>$this->phanloaiService->getGHL(),
            'HoDiep'=>$this->phanloaiService->getHD(),
            'DotBien'=>$this->phanloaiService->getDB(),
            'LanRung'=>$this->phanloaiService->getLR(),
        ]);
    }

    public function HoaHuongDuong()
    {
        return view('page.loaihoa.HoahuongDuong',[
            'title'=>'Hoa Hướng Dương',
            'BHHuongDuong'=>$this->phanloaiService->getBHHD(),
            'GHHuongDuong'=>$this->phanloaiService->getGHHD(),
            'HHHuongDuong'=>$this->phanloaiService->getHHHD(),
            'CMHuongDuong'=>$this->phanloaiService->getCMHD(),
        ]);
    }

    public function Mua(phanloai $bohoa)
    {
        return view('page.loaihoa.MuaHang', [
            'title' => 'Mua: ' . $bohoa->TenBoHoa,
            'bohoa' => $bohoa,
        ]);
    }
}
