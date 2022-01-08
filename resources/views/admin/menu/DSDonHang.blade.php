@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style=" text-align: center"></th>
            <th style="">Tên khách hàng</th>
            <th style="">Số điện thoại</th>
            <th style="">Email</th>
            <th style="">Ngày đặt hàng</th>
            <th style="">Trạng thái</th>
            <th style="">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            {!! \App\Helper\DSDonHang::DSDonHang($DSDonHang) !!}
        </tbody>
    </table>
    <div class="card-footer clearfix" align="center">
        {!! $DSDonHang->links() !!}
    </div>
@endsection
