@extends('main')

@section('head')

@endsection

@section('content')
    <div>
        <h1>Giỏ hàng </h1>
        <p><a href="{{asset('../public/page/Home')}}">Trang chủ </a> &nbsp;/ &nbsp; <a href="{{asset('../public/page/MuaHang/')}}">Mua Hàng</a> &nbsp;/&nbsp; <a href="{{asset('../public/page/GioHang')}}"> Giỏ hàng</a>  </p>
    </div>

    <div class="row mt-5">

        @include('admin.alert')
        @if (count($products) != 0)

        <div class="col-7">
            <div class="card-body table-responsive p-0">
                @php $TongTien = 0; @endphp
                <table class="table table-hover text-nowrap" style="width: 100%">
                    <thead>
                    <tr>
                        <th style="width: 70px"> </th>
                        <th>Bó Hoa</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                        @php
                            $ThanhTien = $product->Gia * $carts[$product->id];
                            $TongTien += $ThanhTien;
                        @endphp
                    <tr>
                        <td><img src="{{$product->link}}" alt="{{$product->TenBoHoa}}" style="width: 70px; height: 100px"> </td>
                        <td style="vertical-align: middle">{{$product->TenBoHoa}} </td>
                        <td  style="vertical-align: middle">{{number_format($product->Gia, 0, '', '.')}}</td>
                        <td  style="vertical-align: middle"><input style="width: 80px; font-size: 14px; border:1px solid blue;" type="number" name="num_product[{{$product->id}}]" value="{{ $carts[$product->id] }}"></td>
                        <td  style="vertical-align: middle">{{number_format($ThanhTien, 0, '', '.')}} </td>
                        <td  style="vertical-align: middle"><div class="btn btn-danger btn-sm"><a href="../page/giohang/delete/{{$product->id}}"><i class="fas fa-trash-alt "></i></a> </div></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

            <div class="col-5">
                <form action="#" method="POST">
                    <div class="card ">
                        <div class="card-header"  style="background: rgb(29,10,253);
background: linear-gradient(0deg, rgba(29,10,253,0.8130602582830007) 0%, rgba(0,127,227,0.9951330874146533) 47%, rgba(9,98,236,1) 100%);" >
                            <h3 class="card-title" style="color: white; text-align: center">Đơn hàng</h3>
                        </div>
                        <div class="card-body">
                            <h3>Thông tin cá nhân</h3>
                            <div class="row">
                                <div class="col-7">
                                    <label><i class="fad fa-user"></i> Tên</label>
                                    <input type="text" name="name" class="form-control" placeholder="" required>
                                </div>
                                <div class="col-5">
                                    <label><i class="fad fa-phone"></i> Số điện thoại</label>
                                    <input type="text" name="tell" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label><i class="fad fa-envelope-square"></i> Email</label>
                                <input type="email" name="email" class="form-control" placeholder="">
                            </div>
                            <div class="mt-3">
                                <label><i class="fad fa-address-card"></i> Địa chỉ nhận hàng</label>
                                <input type="text" name="address" class="form-control" placeholder="" required>
                            </div>
                            <h3 class="mt-3">Thông tin đơn hàng</h3>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" style="width: 100%">
                                    <thead>
                                    <tr>
                                        <th style="width: 45%;">Bó Hoa</th>
                                        <th style="width: 25%; text-align: center">Số lượng</th>
                                        <th style="width: 30%;text-align: center">Thành tiền</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $key => $product)
                                        <tr>
                                            <td style="width: 45%;">{{$product->TenBoHoa}}</td>
                                            <td style="width: 25%; text-align: center"><input style="width: 80px; font-size: 14px; border:1px solid blue;" type="hidden" name="num_product[{{$product->id}}]" value="{{ $carts[$product->id] }}">{{ $carts[$product->id] }} </td>
                                            <td style="width: 30%;text-align: right">{{number_format($product->Gia * $carts[$product->id], 0, '', '.')}} </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div align="right" class="mt-3">
                                <h5>Tổng tiền: {{number_format($TongTien, 0, '', '.')}} vnd</h5>
                            </div>
                            <div class="mt-3">
                                <label><i class="fad fa-sticky-note"></i> Ghi chú:</label>
                                <textarea rows="3" class="cart-note" name="Ghichu" style="width: 100%"></textarea>
                            </div>
                            <div class="mt-4" align="center">
                                <input type="submit" class='cart-button' value="Mua hàng" style="border: 1px solid black">
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        @else
            <div class="text-center"><h2>Giỏ hàng trống</h2></div>
        @endif
    </div>
@endsection

@section('footer')


@endsection
