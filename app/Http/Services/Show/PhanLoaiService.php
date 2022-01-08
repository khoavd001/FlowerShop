<?php

namespace App\Http\Services\Show;

use App\Models\phanloai;

class PhanLoaiService
{
    public function getBH()
    {
        return phanloai::where('MaLoai','HH-BH')->get();
    }
    public function getGH()
    {
        return phanloai::where('MaLoai','HH-GH')->get();
    }
    public function getHH()
    {
        return phanloai::where('MaLoai','HH-HH')->get();
    }
    public function getCM()
    {
        return phanloai::where('MaLoai','HH-CM')->get();
    }
    public function getBHDT()
    {
        return phanloai::where('MaLoai','HDT-BHDT')->get();
    }
    public function getGHDT()
    {
        return phanloai::where('MaLoai','HDT-GHDT')->get();
    }
    public function getLHDT()
    {
        return phanloai::where('MaLoai','HDT-LHDT')->get();
    }
    public function getCMDT()
    {
        return phanloai::where('MaLoai','HDT-CMDT')->get();
    }
    public function getGHL()
    {
        return phanloai::where('MaLoai','HL-GHL')->get();
    }
    public function getHD()
    {
        return phanloai::where('MaLoai','HL-HD')->get();
    }
    public function getDB()
    {
        return phanloai::where('MaLoai','HL-DB')->get();
    }
    public function getLR()
    {
        return phanloai::where('MaLoai','HL-LR')->get();
    }
    public function getBHHD()
    {
        return phanloai::where('MaLoai','HD-BH')->get();
    }
    public function getGHHD()
    {
        return phanloai::where('MaLoai','HD-GH')->get();
    }
    public function getHHHD()
    {
        return phanloai::where('MaLoai','HD-HH')->get();
    }
    public function getCMHD()
    {
        return phanloai::where('MaLoai','HD-CM')->get();
    }
}
