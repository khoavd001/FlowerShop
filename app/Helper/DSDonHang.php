<?php

namespace App\Helper;

class DSDonHang
{
    public static function DSDonHang($DSDonHang)
    {
        $html = ' ';
        foreach($DSDonHang as $key => $DonHang)
        {
            $html .= '
                <tr>
                    <td style="">'.$DonHang->id.'</td>
                    <td style="">'.$DonHang->name.'</td>
                    <td style="">'.$DonHang->phone.'</td>
                    <td style="">'.$DonHang->email.'</td>
                    <td style="">'.$DonHang->created_at.'</td>
                    <td style=""><a href="../menu/updatett/'.$DonHang->id.'">'. self::active($DonHang->trangthai).'</a> </td>
                    <td style="">
                        <a class="btn btn-primary btn-sm" href="../menu/detail/'.$DonHang->id.'">
                            <i class="fab fa-elementor"></i>
                        </a>

                        <a href="#" class="btn btn-danger btn-sm" onclick="removeDonHang('.$DonHang->id.', \'../menu/donhang/destroy\')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            ';
            unset($DonHang[$key]);
        }
        return $html;
    }

    public static function active($active = 1): string
    {
        return $active == 1 ? '<span class="btn btn-danger btn-xs">Chưa giao hàng</span>'
            : '<span class="btn btn-success btn-xs">Đã giao hàng</span>';
    }
}
