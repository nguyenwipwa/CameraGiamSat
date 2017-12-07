
@extends('layouts.subClient')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 pad-btm">
            <div class="row">
                <div class="col-xs-12">
                    <div id="ScrollTo2" class="article_header my-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{'/'}">Trang chủ</a>
                            </li>
                            <li><a href="#">Camera trọn bộ</a>
                            </li>
                        </ol>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-7">
                            <div class="" style="width:100%;background:#fff;border:1px solid #ccc;padding:10px;">
                                <a data-toggle="modal" data-target=".bs-example-modal-lg"> <img style="cursor:pointer;display:block;margin:0 auto;background:#fff;" alt="{{ $product->name }}" src="{{ asset('public/images/san-pham/'.$product->img) }}"> </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">

                            <div class="prd-desc equalheight1">
                                <h1 class="header2"> {{ $product->name }}</h1>
                                <div class="clear"></div>
                                <p>Mã sản phẩm: <b>{{ $product->id }}</b>
                                </p>
                                <p>Thương hiệu: <a href="http://fptcamera.vn/benco-viet-nam">{{ $thuonghieu==null ? 'VANTECH' : $thuonghieu->name }}</a>
                                </p>
                                <p>Giá thị trường: <span class='detail-oldprice'>{{ number_format(($product->price*1.1)) }}đ</span>
                                </p>
                                <p>Giá bán: <span class='detail-price'>{{ number_format($product->price) }} đ</span>
                                </p>
                                <p>Tình trạng: <span class='detail-stock'>Còn hàng</span>
                                </p>
                                <p>Bảo hành: <span class='detail-stock'>24 Tháng</span>
                                </p>
                                <div class="clear"></div>
                                <div style="float:left;" class="social-likes" data-url="http://fptcamera.vn/lap-dat-camera-gia-re-bo-1-den-8-mat">
                                    <div class="facebook" title="Share link on Facebook">Facebook</div>
                                    <div class="plusone" title="Share link on Google+">Google+</div>
                                </div>
                                <div class="clear"></div>
                                <form action="{{route('addCart')}}" class="addcart" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="id" value="{{ $product->id }}" />
                                    <input type="hidden" name="name" value="{{ $product->name }}" />
                                    <input type="hidden" name="price" value="{{ $product->price }}" />
                                    <input type="hidden" name="img" value="{{ $product->img }}" />
                                    <p>Số lượng: <span class='detail-spinner'> 
                                        <div class="input-group bootstrap-touchspin">
                                            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                            <input type="number" name="qty" value="1" min="1" class="cart_qty form-control" style="display: block;">
                                            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                        </div>                                            
                                    </span>
                                </p>
                                <input type="submit" name="action" value="Mua ngay" class="cart_submit" />
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="hidden-xs">
                    <ul class="nav nav-tabs custom-tabs2" role="tablist">
                        <li role="presentation" class="active"><a href="#chitiet" aria-controls="chitiet" role="tab" data-toggle="tab">Chi tiết sản phẩm</a>
                        </li>
                        <li role="presentation"><a href="#thongso" aria-controls="thongso" role="tab" data-toggle="tab">Thông số kỹ thuật</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        {!! html_entity_decode($product->detail_product) !!}
                        {!! html_entity_decode($product->digital) !!}
                    </div>
                    <div id="tags"> <span><i class="fa fa-tags"></i>Xem thêm</span> <a href="http://fptcamera.vn/tag-san-pham/bo-camera-gia-re">bộ camera giá rẻ</a> <a href="http://fptcamera.vn/tag-san-pham/lap-dat-camera-gia-re">lắp đặt camera giá rẻ</a> <a href="http://fptcamera.vn/tag-san-pham/camera-gia-re">camera gia re</a> </div>
                </div> <span class="header3">Sản phẩm liên quan</span>
                <div class="row">
                    @foreach($random as $e)
                    <div class="col-xs-6 col-sm-4">
                        <div class="thumbnail products">
                            <a href="{{ url('/detail-product/'.$e->id) }}"><img alt="{{ $e->name }}" src="{{ asset('public/images/san-pham/'.$e->img) }}">
                            </a>
                            <div class="caption"> <a href="{{ url('/detail-product/'.$e->id) }}"><h3>{{ $e->name }}</h3></a>
                                <div class="clear"></div>
                                <div class="row">
                                    <div class="col-xs-12"><span class="new-price">{!!number_format($e->price) !!} đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-md-3"> <span class="header3">Sản phẩm cùng danh mục</span>
                @foreach($sanpham as $e)
                <div class="media products">
                    <div class="media-left">
                        <a href="{{ url('/detail-product/'.$e->id) }}"> <img class="media-object" alt="{{ $e->name }}" src="{{ asset('public/images/san-pham/'.$e->img) }}"> </a>
                    </div>
                    <div class="media-body">
                        <a href="{{ url('/detail-product/'.$e->id) }}">
                            <h4 class="media-heading">{{ $e->name }}</h4> </a> <span class="media-price">{{number_format($e->price)}} đ</span> </div>
                        </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
    .media-body {
        width: auto;
    }
    .prd-desc .cart_qty {
        width: 100px;
    }
</style>
@endsection