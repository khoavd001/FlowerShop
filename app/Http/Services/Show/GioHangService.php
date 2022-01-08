<?php

namespace App\Http\Services\Show;

//use App\Jobs\SendMail;
use App\Jobs\SendMail;
use App\Models\cart;
use App\Models\Customer;
use App\Models\loaihoa;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class GioHangService
{
    public function create($request)
    {
        $inputSL = (int)$request->input('num_product');
        $BoHoaID = (int)$request->input('BoHoaID');

        if ($inputSL <= 0 || $BoHoaID <= 0) {
            Session::flash('error', 'Số lượng hoặc Sản phẩm không chính xác');
            return false;
        }

        $carts = Session::get('carts');
        if (is_null($carts)) {
            Session::put('carts', [
                $BoHoaID => $inputSL,
            ]);
            return true;
        }

        $exists = Arr::exists($carts, $BoHoaID);
        if ($exists) {
            $carts[$BoHoaID] = $carts[$BoHoaID] + $inputSL;
            Session::put('carts', $carts);
            return true;
        }

        $carts[$BoHoaID] = $inputSL;
        Session::put('carts', $carts);

        return true;

    }

    public function getProducts()
    {
        $carts = Session::get('carts');
        if (is_null($carts)) return [];

        $productId = array_keys($carts);
        return loaihoa::select('id', 'TenBoHoa', 'Gia', 'link')
            ->where('tinhtrang', 1)
            ->whereIn('id', $productId)
            ->get();
    }

    public function remove($id)
    {
        $carts = Session::get('carts');
        unset($carts[$id]);

        Session::put('carts', $carts);
        return true;
    }

    public function addCart($request)
    {
        try {
            DB::beginTransaction();

            $carts = Session::get('carts');

            if (is_null($carts))
                return false;

            $customer = Customer::create([
                'name' => $request->input('name'),
                'phone' => $request->input('tell'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'content' => $request->input('Ghichu'),
            ]);

            $this->infoProductCart($carts, $customer->id);

            DB::commit();
            Session::flash('success', 'Đặt Hàng Thành Công');

            #Queue
            $AdminEmail = '18520873@gm.uit.edu.vn';
            SendMail::dispatch($AdminEmail)->delay(now()->addSeconds(2));

            Session::forget('carts');
        } catch (\Exception $err) {
            DB::rollBack();
            Session::flash('error', 'Đặt Hàng Lỗi, Vui lòng thử lại sau');
            return false;
        }

        return true;
    }
    protected function infoProductCart($carts, $customer_id)
    {
        $productId = array_keys($carts);
        $products = loaihoa::select('id', 'TenBoHoa', 'Gia', 'link')
            ->where('tinhtrang', 1)
            ->whereIn('id', $productId)
            ->get();

        $data = [];
        foreach ($products as $product) {
            $data[] = [
                'customer_id' => $customer_id,
                'product_id' => $product->id,
                'pty'   => $carts[$product->id],
                'price' => $product->Gia,
            ];
        }

        return Cart::insert($data);
    }

    public function getCustomer()
    {
        return customer::orderByDesc('id')->paginate(10);
    }

    public function getDonHang($customer)
    {
        return $customer->carts()->with(['product' => function ($query) {
            $query->select('id', 'TenBoHoa', 'link');
        }])->get();
    }

    public function update($customer)
    {
        if( $customer->trangthai == 1)
        {
            $customer->trangthai = 0;
        }
       else $customer->trangthai = 1;
        $customer->save();
    }

    public function destroy($request)
    {
        $id = (integer)$request->input('id');
        $DonHang = customer::where('id', $id)->first();
        if ($DonHang) {
            return customer::where('id', $id)->delete();
        }

        return false;
    }

}
