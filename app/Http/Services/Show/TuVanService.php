<?php

namespace App\Http\Services\Show;

use App\Models\cart;
use App\Models\customer;
use App\Models\tuvan;
use Illuminate\Support\Facades\Session;

class TuVanService
{
    public function create($request)
    {
        try{
            tuvan::create([
                'Name'=>(string)$request->input('name'),
                'PhuongThuc'=>(int)$request->input('type'),
                'ThongTin'=>(string)$request->input('contact'),
                'NoiDung'=>(string)$request->input('note'),
            ]);
        }catch (\Exception $err)
        {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function show()
    {
        return tuvan::where('trangthai', 1)->orderByDesc('id')->paginate(10);
    }

    public function DoanhThu()
    {
        $Doanhthu = cart::where('created_at',date('y-m-d'))->get();
        return $Doanhthu;

    }

    public function updatett($tuvan)
    {
        if( $tuvan->trangthai == 1)
        {
            $tuvan->trangthai = 0;
        }
        else $tuvan->trangthai = 1;
        $tuvan->save();
    }

    public function DonHang()
    {
        return customer::where('trangthai',1)->count();
    }

}
