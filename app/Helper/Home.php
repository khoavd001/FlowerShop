<?php

namespace App\Helper;

class Home
{
    public static function divKM1($Bohoa)
    {
        $html = '';
        foreach ($Bohoa as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper khuyenmai is-block">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').' đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                         <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                         <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($Bohoa[$key]);
        }
        return $html;
    }

    public static function divKM2($Listhoa)
    {
        $html = '';
        foreach ($Listhoa as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper khuyenmai">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($Listhoa[$key]);
        }
        return $html;
    }

    public static function divKM3($Slidehoa)
    {
        $html = '';
        foreach ($Slidehoa as $key => $bohoa){
            $html .= '
                <div class="slide-item">
                    <img src="'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img khuyenmai">
                </div>
            ';
            unset($Slidehoa[$key]);
        }
        return $html;
    }


    public static function divHT1($BohoaHT)
    {
        $html = '';
        foreach ($BohoaHT as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper hoatuoi is-block">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($BohoaHT[$key]);
        }
        return $html;
    }

    public static function divHT2($ListhoaHT)
    {
        $html = '';
        foreach ($ListhoaHT as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper hoatuoi">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($ListhoaHT[$key]);
        }
        return $html;
    }

    public static function divHT3($SlidehoaHT)
    {
        $html = '';
        foreach ($SlidehoaHT as $key => $bohoa){
            $html .= '
                <div class="slide-item">
                    <img src="'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img hoatuoi">
                </div>
            ';
            unset($SlidehoaHT[$key]);
        }
        return $html;
    }


    public static function divGS1($BohoaGS)
    {
        $html = '';
        foreach ($BohoaGS as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper hoagiangsinh is-block">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($BohoaGS[$key]);
        }
        return $html;
    }

    public static function divGS2($ListhoaGS)
    {
        $html = '';
        foreach ($ListhoaGS as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper hoagiangsinh">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($ListhoaGS[$key]);
        }
        return $html;
    }

    public static function divGS3($SlidehoaGS)
    {
        $html = '';
        foreach ($SlidehoaGS as $key => $bohoa){
            $html .= '
                <div class="slide-item">
                    <img src="'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img hoagiangsinh">
                </div>
            ';
            unset($SlidehoaGS[$key]);
        }
        return $html;
    }


    public static function divTA1($BohoaTA)
    {
        $html = '';
        foreach ($BohoaTA as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper hoatrian is-block">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description ">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($BohoaTA[$key]);
        }
        return $html;
    }

    public static function divTA2($ListhoaTA)
    {
        $html = '';
        foreach ($ListhoaTA as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper hoatrian">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($ListhoaTA[$key]);
        }
        return $html;
    }

    public static function divTA3($SlidehoaTA)
    {
        $html = '';
        foreach ($SlidehoaTA as $key => $bohoa){
            $html .= '
                <div class="slide-item">
                    <img src="'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img hoatrian">
                </div>
            ';
            unset($SlidehoaTA[$key]);
        }
        return $html;
    }


    public static function divF1($BohoaF)
    {
        $html = '';
        foreach ($BohoaF as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper hoafriend is-block">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($BohoaF[$key]);
        }
        return $html;
    }

    public static function divF2($ListhoaF)
    {
        $html = '';
        foreach ($ListhoaF as $key => $bohoa)
        {
            $html .= '<div class="container__flower-list-wrapper hoafriend">
                        <div class="container__flower-list-banner">
                            <img src="'.$bohoa->link.'" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
                        </div>
                        <div class="container__flower-list-content-wrapper">
                            <p class="flower-list-paragraph tenbohoa mt-3"><b>'.$bohoa->TenBoHoa.'</b></p>
                            <div class="container__flower-list-content mt-3">
                                <div class="container__flower-list-description">
                                    <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> '.$bohoa->DipTang.'</p>
                                    <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> '.number_format($bohoa->Gia, 0, '', '.').'đ</span></p>
                                    <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="'.$bohoa->tinhtrang.'" class="good-status"></span></p>
                                    <div align="center" class="mt-3">
                                        <a href="../page/MuaHang/' . $bohoa->id . '"><input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3"></a>
                                        <input type="hidden" name="BoHoaID" value="'.$bohoa->id.'" >
                                    </div>
                                </div>
                                <div class="container__flower-list-flower-include">
                                    <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> '.$bohoa->Chitiet.'</p>
                                    <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>'.$bohoa->ynghia.'</p>
                                </div>
                            </div>
                        </div>
                      </div>';
            unset($ListhoaF[$key]);
        }
        return $html;
    }

    public static function divF3($SlidehoaF)
    {
        $html = '';
        foreach ($SlidehoaF as $key => $bohoa){
            $html .= '
                <div class="slide-item">
                    <img src="'.$bohoa->link.'" alt= "'.$bohoa->TenBoHoa.'" class="flower-list-slider-img hoafriend">
                </div>
            ';
            unset($SlidehoaF[$key]);
        }
        return $html;
    }
}
