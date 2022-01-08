@extends('admin.main')

@section('content')
    <div class="customer mt-3">
        <ul>
            <li>Tên khách hàng: <strong>{{ $customer->name }}</strong></li>
            <li>Số điện thoại: <strong>{{ $customer->phone }}</strong></li>
            <li>Địa chỉ: <strong>{{ $customer->address }}</strong></li>
            <li>Email: <strong>{{ $customer->email }}</strong></li>
            <li>Ghi chú: <strong>{{ $customer->content }}</strong></li>
        </ul>
    </div>

    <div class="carts">
        @php $total = 0; @endphp
        <table class="table">
            <tbody>
            <tr class="table_head">
                <th class="column-1" style="width: 20%; text-align: center">Hình ảnh</th>
                <th class="column-2" style="width: 20%; text-align: left">Tên bó hoa</th>
                <th class="column-3" style="width: 20%; text-align: center">Giá</th>
                <th class="column-4" style="text-align: center;">Số lượng</th>
                <th class="column-5" style="width: 20%; text-align: right; padding-right: 50px">Thành tiền</th>
            </tr>

            @foreach($carts as $key => $cart)
                @php
                    $price = $cart->price * $cart->pty;
                    $total += $price;
                @endphp
                <tr>
                    <td class="column-1" style="width: 20%">
                        <div class="how-itemcart1" align="center">
                            <img src="../../{{ $cart->product->link }}" alt="IMG" style="width: 70px; height: 100px;">
                        </div>
                    </td>
                    <td class="column-2" style=" vertical-align: middle;">{{ $cart->product->TenBoHoa }}</td>
                    <td class="column-3" style=" vertical-align: middle; text-align: center">{{ number_format($cart->price, 0, '', '.') }}</td>
                    <td class="column-4" style="text-align: center; vertical-align: middle;">{{ $cart->pty }}</td>
                    <td class="column-5" style=" vertical-align: middle;text-align: right; padding-right: 50px">{{ number_format($price, 0, '', '.') }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="5" class="text-right " style="text-align: right; padding-right: 70px"><h5><b>Tổng Tiền: {{ number_format($total, 0, '', '.') }} đ</b></h5></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection


