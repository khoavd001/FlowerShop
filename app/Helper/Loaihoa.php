<?php

namespace App\Helper;

class Loaihoa
{
    public static function slideBH($BoHoa)
    {
        $html = '';
        foreach ($BoHoa as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($BoHoa[$key]);
        }
        return $html;
    }
    public static function slideGH($GioHoa)
    {
        $html = '';
        foreach ($GioHoa as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($GioHoa[$key]);
        }
        return $html;
    }
    public static function slideHH($HopHoa)
    {
        $html = '';
        foreach ($HopHoa as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($HopHoa[$key]);
        }
        return $html;
    }
    public static function slideCM($ChucMung)
    {
        $html = '';
        foreach ($ChucMung as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($ChucMung[$key]);
        }
        return $html;
    }
    public static function slideBHDT($BHDongTien)
    {
        $html = '';
        foreach ($BHDongTien as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($BHDongTien[$key]);
        }
        return $html;
    }
    public static function slideGHDT($GHDongTien)
    {
        $html = '';
        foreach ($GHDongTien as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($GHDongTien[$key]);
        }
        return $html;
    }
    public static function slideLHDT($LHDongTien)
    {
        $html = '';
        foreach ($LHDongTien as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                             <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($LHDongTien[$key]);
        }
        return $html;
    }
    public static function slideCMDT($CMDongTien)
    {
        $html = '';
        foreach ($CMDongTien as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                             <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($CMDongTien[$key]);
        }
        return $html;
    }
    public static function slideGHL($GHLan)
    {
        $html = '';
        foreach ($GHLan as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                             <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($GHLan[$key]);
        }
        return $html;
    }
    public static function slideHD($HoDiep)
    {
        $html = '';
        foreach ($HoDiep as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($HoDiep[$key]);
        }
        return $html;
    }
    public static function slideDB($DotBien)
    {
        $html = '';
        foreach ($DotBien as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                             <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($DotBien[$key]);
        }
        return $html;
    }
    public static function slideLR($LanRung)
    {
        $html = '';
        foreach ($LanRung as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($LanRung[$key]);
        }
        return $html;
    }
    public static function slideBHHD($BHHuongDuong)
    {
        $html = '';
        foreach ($BHHuongDuong as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="cemter">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                             <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($BHHuongDuong[$key]);
        }
        return $html;
    }
    public static function slideGHHD($GHHuongDuong)
    {
        $html = '';
        foreach ($GHHuongDuong as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                             <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($GHHuongDuong[$key]);
        }
        return $html;
    }
    public static function slideHHHD($HHHuongDuong)
    {
        $html = '';
        foreach ($HHHuongDuong as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                             <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($HHHuongDuong[$key]);
        }
        return $html;
    }
    public static function slideCMHD($CMHuongDuong)
    {
        $html = '';
        foreach ($CMHuongDuong as $key => $bohoa){
            $html .= '
                        <div class="slide-item" align="center">
                            <a href="../loaihoa/MuaHang/'.$bohoa->id.'"><img src="../'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img bohoa"></a>
                            <div style="width: 90%" class="mt-2"><p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p></div>
                            <p class="flower-list-paragraph gia">Giá:<span class="flower-list-cost"> '.$bohoa->Gia.'đ</span></p>
                        </div>
            ';
            unset($CMHuongDuong[$key]);
        }
        return $html;
    }
}
