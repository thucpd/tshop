@extends('admin/layout2')
@section('product')

<div class="panel panel-primary">
        <div class="panel-heading">
            
            <i class="fa fa-bar-chart-o fa-fw"></i>
            <strong>
                <b>Danh sách sản phẩm </b>
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
                <table class="table table-bordered table-hover">
                        <thead>
                        <tr align="center" style="font-weight:bold">
                            <td scope="col">STT</td>
                            <td scope="col">Ảnh sản phẩm</th>
                            <td scope="col">Mã sản phẩm</th>
                            <td scope="col">Tên sản phẩm</th>
                            <td scope="col">Hãng sản xuất</th>
                            <td scope="col">Giá</th>
                            <td scope="col">Size</th>
                            <td scope="col">Số lượng</th>
                            <td scope="col">Trạng thái</th>
                            <td scope="col">Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $stt=1 ?>
                            @foreach($products as $product)
                                <tr id="sanpham-{{$product->id}}" align="center">
                                    <td>{{$stt++}}</td>
                                    <td><img src="/images/hinhsp/{{$product->anhsp}}" width="75px" height ="75px"></td>
                                    <td>{{$product->masp}}</td>
                                    <td>{{$product->tensp}}</td>
                                    <td>{{$product->hangsx}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->size}}</td>
                                    <td>{{$product->soluong}}</td>
                                    <td>{{$product->trangthai}}</td>
                                    <td>
                                        <a style="padding-bottom:10px" href="{{route('editproduct',$product->id)}}"><button class="btn btn-warning btn-sm" style="width:100%;">Edit</button></a>
                                        <br><br>
                                        <button class="btn btn-primary btn-sm btn-call-modal" data-id="{{$product->id}}">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
        </div>
    </div>
@endsection