@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 6%; text-align: center">Bó hoa</th>
            <th style="width: 10%">Tên bó hoa</th>
            <th style="width: 7%">Giá</th>
            <th style="width: 14%">Chi tiết</th>
            <th style="width: 10%">Dịp tặng</th>
            <th style="width: 8%; text-align: center">Trạng thái</th>
            <th style="width: 25%; text-align: center">Ý nghĩa</th>
            <th style="width: 10%">Update</th>
            <th style="width: 10%">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
            {!! \App\Helper\Helper::thongtin($Bohoa) !!}
        </tbody>
    </table>
    <div class="card-footer clearfix" align="center">
        {!! $Bohoa->links() !!}
    </div>
@endsection
