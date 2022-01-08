<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\customer;
use Illuminate\Http\Request;
use App\Http\Services\Show\GioHangService;

class GioHangController extends Controller
{
    protected $gioHangService;

    public function __construct(GioHangService $gioHangService)
    {
        $this->gioHangService=$gioHangService;
    }

    public function index()
    {
        return view('admin.menu.DSDonHang',[
            'title'=>'Đơn hàng',
            'DSDonHang'=>$this->gioHangService->getCustomer(),
        ]);
    }

    public function detail(customer $customer)
    {
        $carts = $this->gioHangService->getDonHang($customer);

        return view('admin.menu.detail', [
            'title' => 'Chi Tiết Đơn Hàng: ' . $customer->name,
            'customer' => $customer,
            'carts' => $carts
        ]);
    }

    public function updatett(customer $customer)
    {
        $this->gioHangService->update($customer);

        return redirect('admin/menu/DSDonHang');
    }

    public function destroy(Request $request)
    {
        $result = $this->gioHangService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Đã xóa đơn hàng  :(('
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
