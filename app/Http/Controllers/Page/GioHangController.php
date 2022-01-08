<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Services\Show\GioHangService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GioHangController extends Controller
{
    protected $giohangService;

    public function __construct(GioHangService $gioHangService)
    {
        $this->giohangService=$gioHangService;
    }

    public function add(Request $request)
    {

        $result = $this->giohangService->create($request);

        if ($result === false) {
            return redirect()->back();
        }

        return redirect('/page/GioHang');
    }


    public function index()
    {
        $products = $this->giohangService->getProducts();
        return view('page.GioHang',[
            'title'=>'Giỏ Hàng',
            'products' => $products,
            'carts' => Session::get('carts')
        ]);
    }

    public function remove($id = 0)
    {
        $this->giohangService->remove($id);

        return redirect('/page/GioHang');
    }

    public function addCart(Request $request)
    {
//        dd($request->input());
        $this->giohangService->addCart($request);

        return redirect()->back();
    }
}
