<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use App\Models\loaihoa;
use Illuminate\Http\Request;
use App\Http\Services\Menu\LoaiHoaService;
use Illuminate\Http\JsonResponse;

class LoaiHoaController extends Controller
{
    protected  $loaihoaService;

    public function __construct(LoaiHoaService $loaiHoaService)
    {
        $this->loaihoaService=$loaiHoaService;
    }

    public function create()
    {
        return view('admin.menu.AddSPHome',[
            'title'=>'Thêm sản phẩm mới'
        ]);
    }

    public function store(CreateFormRequest $request)
    {
        $this->loaihoaService->create($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.menu.ListSPHome', [
            'title' => 'Danh sách sản phẩm',
            'Bohoa' => $this->loaihoaService->getAll()
        ]);
    }

    public function show(loaihoa $bohoa)
    {
        return view('admin.menu.edit', [
            'title' => 'Edit thông tin bó hoa: ' . $bohoa->TenBoHoa,
            'bohoa' => $bohoa,

        ]);
    }

    public function update(loaihoa $bohoa, CreateFormRequest $request)
    {
        $this->loaihoaService->update($request, $bohoa);

        return redirect('/admin/menu/ListSPHome');
    }

    public function updatettsp(loaihoa $bohoa)
    {
        $this->loaihoaService->updatettsp($bohoa);

        return redirect('admin/menu/ListSPHome');
    }

    public function destroy(Request $request)
    {
        $result = $this->loaihoaService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Đã xóa sản phẩm :))'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

    public function home()
    {
        return view('page.home', [
            'title' => 'Trang chủ',
            'Bohoa' => $this->loaihoaService->getKM(),
            'Listhoa' => $this->loaihoaService->getListKM(),
            'Slidehoa' => $this->loaihoaService->getSlideKM(),

            'BohoaHT' => $this->loaihoaService->getHT(),
            'ListhoaHT' => $this->loaihoaService->getListHT(),
            'SlidehoaHT' => $this->loaihoaService->getSlideHT(),

            'BohoaGS' => $this->loaihoaService->getGS(),
            'ListhoaGS' => $this->loaihoaService->getListGS(),
            'SlidehoaGS' => $this->loaihoaService->getSlideGS(),

            'BohoaTA' => $this->loaihoaService->getTA(),
            'ListhoaTA' => $this->loaihoaService->getListTA(),
            'SlidehoaTA' => $this->loaihoaService->getSlideTA(),

            'BohoaF' => $this->loaihoaService->getF(),
            'ListhoaF' => $this->loaihoaService->getListF(),
            'SlidehoaF' => $this->loaihoaService->getSlideF(),

        ]);
    }

    public function Mua(loaihoa $bohoa)
    {
        return view('page.MuaHang', [
            'title' => 'Mua: ' . $bohoa->TenBoHoa,
            'bohoa' => $bohoa,
        ]);
    }
}
