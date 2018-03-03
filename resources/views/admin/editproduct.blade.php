@extends('admin/layout2')
@section('editproduct')
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
            {{--  @if($errors->any())
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
            @endif  --}}
            <form method="POST" action="{{route('editproduct',$products->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                {{--  @foreach($products as $product)  --}}
                <div>
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="tensp"class="form-control" id="" placeholder="Tên sản phẩm" required value="{{$products->tensp}}" >
                    </div>
                    <div class="form-group">
                        <label for="">Mã sản phẩm</label>
                        <input type="text" name="masp" class="form-control" id="" placeholder="Mã sản phẩm" required value="{{$products->masp}}" >
                    </div>
                    {{--  <div class="form-group">
                        <label for="">Hãng sản xuất</label>
                        <select class="form-control" id="hangsx" name="hangsx" required>
                            @foreach($products as $product)
                                <option>$product->hangsx</option>
                            @endforeach
                        </select>
                    </div>  --}}
                    <div class="form-group">
                            <label for="">Giá</label>
                            <input type="text" name="price" class="form-control" id="" placeholder="Giá" required value="{{$products->price}}">
                        </div>
                    <div class="form-group">
                        <label for="">Size</label>
                        <input type="text" name="size" class="form-control" id="" placeholder="Size" required value="{{$products->size}}">
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="text" name="soluong" class="form-control" id="" placeholder="Số lượng" required value="{{$products->soluong}}">
                    </div>
                    <div class="form-group">
                        <label for="">Thông tin sản phẩm</label>
                        <textarea class="form-control" id="" name="thongtin" rows="3">{{$products->thongtin}}</textarea>            
                    </div>
                    {{--  <div class="form-group">
                        <label for="">Trạng thái sản phẩm</label>
                        <select class="form-control" name="trangthai">
                            @foreach($products as $product)
                            <option value="{{$product->id}}" @if($products->id==$product->id) selected @endif>{{$product->trangthai}}</option>
                            @endforeach
                        </select>
                    </div>  --}}
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" class="form-control-file" id="" name="anhsp" >
                    </div>
                    <div>  
                        <img src="/images/hinhsp/{{$products->anhsp}}" width="200px" height ="200px">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh phụ cho sản phẩm</label>
                        <input type="file" class="form-control-file" id="" name="anhsp2[]" multiple >
                        <?php $anhphu = explode("/", $products->anhphu)?>
                        @foreach($anhphu as $a)
                        <img src="/images/hinhphusp/{{$a}}" width="100px" height ="100px">
                            <hr>
                        @endforeach
                        
                    </div>
                    <div>
                        <button class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection