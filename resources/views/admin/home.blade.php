@extends('admin.main')

@section('head')

@endsection

@section('content')
    <div class=" mt-4">

        <div class="card card-danger" >
            <div class="card-header">
                <h3 class="card-title">Tổng quan </h3>
            </div>
            <div class="card-body">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Doanh thu
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="line-chart" style="height: 300px;"></div>
                    </div>
                    <!-- /.card-body-->
                </div>

                <div>
                    <h4>Doanh thu trong ngày: {{number_format(\App\Helper\TuVan::DoanhThu($DoanhThu), 0, '', '.')}} vnd</h4>
                </div>

                <div>
                    <h4>Đơn hàng</h4>
                    <p>Đang chờ: {{$DonHang}} đơn hàng</p>
                </div>

            </div>
        </div>


        <div class="card card-success" >
            <div class="card-header">
                <h3 class="card-title">Tư vấn khách hàng</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th style=" width:3%; text-align: center"></th>
                        <th style="width:17%">Tên khách hàng</th>
                        <th style="width:15% ">Hình thức tư vấn</th>
                        <th style="width:20%">Thông tin liên lạc</th>
                        <th style="width:30%">Nội dung</th>
                        <th style="width:10%; text-align: center">Trạng thái</th>
                        <th style="width:5%">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                        {!! \App\Helper\TuVan::show($tuvan) !!}
                    </tbody>
                </table>
                <div class="card-footer clearfix" align="center">
{{--                        {!! $DSDonHang->links() !!}--}}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <!-- AdminLTE App -->
    <script src="{{asset('../public/template/admin/dist/js/adminlte.min.js')}}"></script>
    <!-- FLOT CHARTS -->
    <script src="{{asset('../public/template/admin/plugins/flot/jquery.flot.js')}}"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="{{asset('../public/template/admin/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="{{asset('../public/template/admin/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('../public/template/admin/dist/js/demo.js')}}"></script>

    <script src="{{asset('../public/template/admin/js/chart.js')}}"></script>

@endsection
