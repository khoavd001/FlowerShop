@extends('admin.main')

@section('head')
    <script src="{{asset('../public/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
    <div class="card card-warning">
        <!-- /.card-header -->
        <div class="card-body">
            <form action="#" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-2">
                                    <label>Mã loại</label>
                                    <input type="text" name="MaLoai" class="form-control" placeholder="KM">
                                </div>

                                <div class="col-3">
                                    <label>Bó hoa </label>
                                    <input type="text" name="BoHoa" class="form-control" placeholder="KM01">
                                </div>

                                <div class="col-4">
                                    <label>Giá bán</label>
                                    <input type="text" name="Gia" class="form-control" placeholder="250000">
                                </div>

                                <div class="col-2" align="center">
                                    <label>Còn hàng</label>
                                    <div class="form-check" >
                                        <input class="form-check-input" name="tinhtrang" id="tinhtrang" type="checkbox" checked>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-6">
                                        <label>Tên bó hoa</label>
                                        <input type="text" name="TenBoHoa" class="form-control" placeholder="Bình minh">
                                    </div>
                                    <div class="col-6">
                                        <label>Dịp tặng</label>
                                        <input type="text" name="DipTang" class="form-control" placeholder="Sinh nhật, họp mặt,...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-danger" >
                            <div class="card-header">
                                <h3 class="card-title">Ghi chú:</h3>
                            </div>
                            <div class="card-body">
                                <h5>Bảng tra mã loại:</h5>
                                <div class="row">
                                    <div class="col-4">
                                        <p><b>KM:</b> Hoa khuyến mãi</p>
                                        <p><b>HT:</b> Hoa tươi</p>
                                    </div>
                                    <div class="col-4">
                                        <p><b>GS:</b> Hoa giáng sinh</p>
                                        <p><b>TA:</b> Hoa tri ân</p>
                                    </div>
                                    <div class="col-4">
                                        <p><b>F:</b> Hoa tặng bạn</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Thành phần:</label>
                                <input type="text" name="Chitiet" class="form-control" placeholder="Hoa hồng, Hoa hướng dương,...">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Link ảnh</label>
                                <input type="text" name="link" class="form-control" placeholder="img/home/HoaKM/[ID].jpg">
                            </div>
                        </div>
                    </div>

                    <!-- input states -->
                    <div class="form-group">
                        <label class="col-form-label"> Ý nghĩa</label>
                        <textarea name="ynghia" id="ynghia" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary btn-lg">Tạo mới</button>
                    </div>

                </div>

                @csrf

            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('ynghia');
    </script>
@endsection
