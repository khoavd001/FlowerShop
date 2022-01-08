<?php

namespace App\Helper;

class Helper
{
    public static function thongtin($Bohoa)
    {
        $html = '';
        foreach ($Bohoa as $key => $bohoa){
            $html .='
                <tr>
                    <td style="text-align: center; vertical-align: middle; display: table-cell">'.$bohoa->BoHoa. '</td>
                    <td style="vertical-align: middle; display: table-cell">'.$bohoa->TenBoHoa. '</td>
                    <td style="vertical-align: middle; display: table-cell">'.$bohoa->Gia. '</td>
                    <td style="vertical-align: middle; display: table-cell; text-overflow: ellipsis">'.$bohoa->Chitiet. '</td>
                    <td style="vertical-align: middle; display: table-cell">'.$bohoa->DipTang. '</td>
                    <td style="text-align: center;vertical-align: middle; display: table-cell"><a href="../menu/updatettsp/'.$bohoa->id.'"> '.self::active($bohoa->tinhtrang). '</a></td>
                    <td><div style="height: 90px; overflow-y: auto;">'.$bohoa->ynghia. '</div> </td>
                    <td style="text-align: center;vertical-align: middle; display: table-cell">'.$bohoa->updated_at. '</td>
                    <td style="vertical-align: middle; display: table-cell">
                        <a class="btn btn-primary btn-sm" href="../menu/edit/' . $bohoa->id . '">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="#" class="btn btn-danger btn-sm" onclick="removeRow(' . $bohoa->id . ', \'../menu/destroy\')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            ';
            unset($Bohoa[$key]);
        }
        return $html;
    }

    public static function active($active = 0): string
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs">Hết hàng</span>'
            : '<span class="btn btn-success btn-xs">Còn hàng</span>';
    }
}
