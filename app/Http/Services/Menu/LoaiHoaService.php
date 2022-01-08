<?php

namespace App\Http\Services\Menu;

use App\Models\loaihoa;
use Illuminate\Support\Facades\Session;

class LoaiHoaService
{
    public function getAll()
    {
        return loaihoa::orderBy('id')->paginate(20);
    }

    public function create($request): bool
    {
        try {
            loaihoa::create([
                'BoHoa' =>(string) $request->input('BoHoa'),
                'MaLoai'=>(string) $request->input('MaLoai'),
                'TenBoHoa'=>(string) $request->input('TenBoHoa'),
                'Gia'=>(integer) $request->input('Gia'),
                'Chitiet'=>(string) $request->input('Chitiet'),
                'DipTang'=>(string) $request->input('DipTang'),
                'tinhtrang'=>(int) $request->input('tinhtrang'),
                'link'=>(string) $request->input('link'),
                'ynghia'=>(string) $request->input('ynghia'),
            ]);

            Session::flash('success', 'Thêm sản phẩm thành công :))');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }

        return true;
    }

    public function update($request, $bohoa)
    {
        try{
            $bohoa->Bohoa = (string) $request->input('BoHoa');
            $bohoa->MaLoai = (string) $request->input('MaLoai');
            $bohoa->TenBoHoa = (string) $request->input('TenBoHoa');
            $bohoa->Gia = (integer) $request->input('Gia');
            $bohoa->Chitiet = (string) $request->input('Chitiet');
            $bohoa->DipTang = (string) $request->input('DipTang');
            $bohoa->tinhtrang = (integer) $request->input('tinhtrang');
            $bohoa->link = (string) $request->input('link');
            $bohoa->ynghia= (string) $request->input('ynghia');
            $bohoa->save();

            Session::flash('success',$bohoa->TenBoHoa.' Cập nhật thành công !');
            return true;
        }catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }

    public function updatettsp($bohoa)
    {
        if($bohoa->tinhtrang == 1)
        {
            $bohoa->tinhtrang = 0;
        }
        else $bohoa->tinhtrang = 1;
        $bohoa->save();
    }

    public function destroy($request): bool
    {
        $id = (integer)$request->input('id');
        $BoHoa = loaihoa::where('id', $id)->first();
        if ($BoHoa) {
            return loaihoa::where('id', $id)->delete();
        }

        return false;
    }

    // home main page

    public function getKM()
    {
        return loaihoa::where('MaLoai', 'KM-first')->get();
    }
    public function getListKM()
    {
        return loaihoa::where('MaLoai', 'KM')->get();
    }
    public function getSlideKM()
    {
        return loaihoa::whereIn('MaLoai',['KM','KM-first'] )->get();
    }

    public function getHT()
    {
        return loaihoa::where('MaLoai', 'HT-first')->get();
    }
    public function getListHT()
    {
        return loaihoa::where('MaLoai', 'HT')->get();
    }
    public function getSlideHT()
    {
        return loaihoa::whereIn('MaLoai',['HT','HT-first'] )->get();
    }

    public function getGS()
    {
        return loaihoa::where('MaLoai', 'GS-first')->get();
    }
    public function getListGS()
    {
        return loaihoa::where('MaLoai', 'GS')->get();
    }
    public function getSlideGS()
    {
        return loaihoa::whereIn('MaLoai',['GS','GS-first'] )->get();
    }

    public function getTA()
    {
        return loaihoa::where('MaLoai', 'TA-first')->get();
    }
    public function getListTA()
    {
        return loaihoa::where('MaLoai', 'TA')->get();
    }
    public function getSlideTA()
    {
        return loaihoa::whereIn('MaLoai',['TA','TA-first'] )->get();
    }

    public function getF()
    {
        return loaihoa::where('MaLoai', 'F-first')->get();
    }
    public function getListF()
    {
        return loaihoa::where('MaLoai', 'F')->get();
    }
    public function getSlideF()
    {
        return loaihoa::whereIn('MaLoai',['F','F-first'] )->get();
    }
}
