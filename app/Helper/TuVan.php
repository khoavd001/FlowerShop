<?php

namespace App\Helper;

class TuVan
{
    public static function show($Tuvan)
    {
        $html = ' ';
        foreach ($Tuvan as $key => $tuvan)
        {
            $html.='
                <tr>
                    <td style="vertical-align: middle; width: 3%">'.$tuvan->id.'</td>
                    <td style="vertical-align: middle; width: 17%">'.$tuvan->Name.'</td>
                    <td style="vertical-align: middle; width: 15%">'. self::PT($tuvan->PhuongThuc).'</td>
                    <td style="vertical-align: middle; width: 20%">'.$tuvan->ThongTin.'</td>
                    <td style="vertical-align: middle; width: 15%">'.$tuvan->NoiDung.'</td>
                    <td style="vertical-align: middle; width: 10%; text-align: center"><a href="../public/admin/tuvan/updatett/'.$tuvan->id.'">'. self::active($tuvan->trangthai).'</a> </td>
                    <td style="vertical-align: middle; width: 5%">
                        <a href="#" class="btn btn-danger btn-sm" onclick="removeTuVan('.$tuvan->id.', \'../admin/tuvan/destroy\')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            ';
            unset($tuvan[$key]);
        }
        return $html;
    }

    public static function active($active = 1): string
    {
        return $active == 1 ? '<span class="btn btn-danger btn-xs">Chưa xem</span>'
            : '<span class="btn btn-success btn-xs">Đã xem</span>';
    }

    public static function PT($active = 1): string
    {
        switch ($active)
        {
            case 1: return '<span class=""><i class="fas fa-phone-square-alt"></i> Phone</span>'; break;
            case 2: return '<span class=""><i class="fab fa-facebook"></i> Facebook</span>'; break;
            case 3: return '<span class=""><i class="fab fa-facebook-messenger"></i> Zalo</span>'; break;
            case 4: return '<span class=""><i class="far fa-envelope"></i> Mail</span>'; break;
        }
    }

    public static function DoanhThu($DoanhThu)
    {
        $dt = 0;
        foreach ($DoanhThu as $key => $doanhthu)
        {
            $dt += $doanhthu->pty * $doanhthu->price;
            unset($doanhthu[$key]);
        }
        return $dt;
    }
}
