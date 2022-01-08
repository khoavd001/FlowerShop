@extends('main')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

        <div>
            <h1>Mua Hàng </h1>
            <p><a href="{{asset('../public/page/home')}}">Trang chủ</a> &nbsp;/ &nbsp; <a href="{{asset('../public/page/MuaHang/'.$bohoa->id.'')}}">Mua Hàng</a> </p>
        </div>
        <div class="container__flower-list-wrapper is-block mt-4">
            <div class="container__flower-list-banner">
                <img src="../{{$bohoa->link}}" alt="'.$bohoa->TenBoHoa.'" class="flower-list-banner-img">
            </div>
            <div class="container__flower-list-content-wrapper">
                <p class="flower-list-paragraph tenbohoa mt-3"><b>{{$bohoa->TenBoHoa}}</b></p>
                <div class="container__flower-list-content mt-3">
                    <div class="container__flower-list-description">
                        <p class="flower-list-paragraph diptang mt-3"><span class="diptang-title">Dịp tặng:</span> {{$bohoa->DipTang}}</p>
                        <p class="flower-list-paragraph gia mt-3">Giá:<span class="flower-list-cost"> {{number_format($bohoa->Gia, 0, '', '.')}}đ</span></p>
                        <p class="flower-list-paragraph tinhtrang mt-3">Tình trạng: <span data-check="{{$bohoa->tinhtrang}}" class="good-status"></span></p>
                        <form action="{{asset('./page/addGioHang')}}" method="post">
                            <div align="center" class="mt-3">
                                <lable><b>Số lượng:</b> </lable><input style="width: 80px; font-size: 14px; border:1px solid blue;" type="number" name="num_product" value="1">
                                <input type="submit" name="submit" value="mua ngay" class="buy-btn mt-3">
                                <input type="hidden" name="BoHoaID" value="{{$bohoa->id}}" >
                            </div>
                            @csrf
                        </form>
                    </div>
                    <div class="container__flower-list-flower-include">
                        <p class="flower-list-paragraph hoachinh"><span class="hoachinh-title">Hoa chính: </span> {{$bohoa->Chitiet}}</p>
                        <p class="flower-list-paragraph ynghia"><span class="ynghia-title">Ý nghĩa: </span>{{$bohoa->ynghia}}</p>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('footer')

@endsection

