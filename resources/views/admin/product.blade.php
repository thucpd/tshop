@extends('admin/layout') @section('product')
<div class="panel panel-primary">
    <div class="panel-heading">
        
        <i class="fa fa-bar-chart-o fa-fw"></i>
        <strong>
            <b>Thêm sản phẩm </b>
        </strong>

        <div class="pull-right">
        </div>
    </div>
    <div class="panel-body">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err) {{$err}}
            <br> @endforeach
        </div>
        @endif @if(Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
        @endif @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <form method="POST" action="{{route('product')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" name="tensp"class="form-control" id="" placeholder="Tên sản phẩm" required >
            </div>
            <div class="form-group">
                <label for="">Mã sản phẩm</label>
                <input type="text" name="masp" class="form-control" id="" placeholder="Mã sản phẩm" required>
            </div>
            <div class="form-group">
                <label for="">Hãng sản xuất</label>
                <select class="form-control" id="hangsx" name="hangsx" required>
                    <option>Adidas</option>
                    <option>Nike</option>
                    <option>Biti's</option>
                    <option>Convert</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Size</label>
                <input type="text" name="size" class="form-control" id="" placeholder="Size" required>
            </div>
            <div class="form-group">
                <label for="">Số lượng</label>
                <input type="text" name="soluong" class="form-control" id="" placeholder="Số lượng" required>
            </div>
            <div class="form-group">
                <label for="">Thông tin sản phẩm</label>
                <textarea class="form-control" id="" name="thongtin" rows="3"></textarea>            
            </div>
            <div class="form-group">
                <label for="">Trạng thái sản phẩm</label>
                <select class="form-control" name="trangthai">
                    <option>Còn hàng</option>
                    <option>Hết hàng</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" class="form-control-file" id="" name="anhsp" required>
            </div>
            <div>
            <button class="btn btn-primary">Thêm</button>
            </div>
        </form>
    </div>

</div>
@endsection