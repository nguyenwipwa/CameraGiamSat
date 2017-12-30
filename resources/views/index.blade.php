@extends('layouts.client')
@section('content')
<div class="container menu_bg">
    <div class="row menu_bg">
        <div class="col-xs-12 col-xs-offset-0 menu_bg">
            <div class="row">
                <div class="col-md-4 col-lg-3 hidden-xs hidden-sm" style="padding-right:0;">
                    <div id="prd-cate-list">
                        <div class="prd-cate-header">
                            <span>Danh mục sản phẩm<i class="fa fa-chevron-circle-down"></i></span>
                        </div>
                        <ul class="main-page equalheightbanner">
                            <ul>
                             @foreach($category as $cate)
                             @if($cate->id_root == 0 && $cate->status==1)
                             <li><a href="{{url('/category/'.$cate->id.'/1')}}"><img alt = "{{$cate->name}}" src = "{{ asset('public/images/danh-muc-san-pham/'.$cate->icon) }}" /><span class="mc_title">{{$cate->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                                <ul>
                                    @foreach($category as $cate1)
                                    @if($cate->id == $cate1->id_root && $cate1->status==1)
                                    <li><a href="{{url('/category/'.$cate1->id.'/1')}}"><img alt = "{{$cate1->name}}" src = "" /><span class="mc_title">{{$cate1->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                                        <ul>
                                         @foreach($category as $cate2)
                                         @if($cate1->id == $cate2->id_root && $cate2->status==1)
                                         <li><a href="{{url('/category/'.$cate2->id.'/1')}}"><img alt = "{{$cate2->name}}" src = "" /><span class="mc_title">{{$cate2->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                                            <div class="clear"></div>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                    <div class="clear"></div>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                            <div class="clear"></div>
                        </li>
                        @endif
                        @endforeach
                    </ul>
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-md-8 col-lg-9">
            <div class="row">
                <div class="col-xs-12 col-lg-8" style="padding:0;">
                    <div id="searchform">
                        <form action="{{route('search')}}" accept-charset="utf-8" method="get"> <img style="display: none;" class="loader" src="http://fptcamera.vn/resources/ui_images/client/background/loader.gif" />
                            <input type="text" name="key" value="" id="searchbutton" class="searchfield" onkeyup="lookup()" autocomplete="off" placeholder="Tìm kiếm sản phẩm ..." />
                            <input type="submit" name="submit_search" value="Tìm kiếm" id="search_btn" class="searchbutton" />
                            <div class="clear"></div>
                            <div class="autoSuggestionsList_l" id="autoSuggestionsList">
                            </div>
                        </form>
                    </div>
                    <div id="banner" class="hidden-xs hidden-sm equalheightbanner">
                        <div class="bannerslider">
                            <ul class="slides">
                                @foreach($slider->where('layout', 'center')->all() as $e)
                                <li>
                                    <a href="{{ $e->href }}">
                                        <img title="{{ $e->title }}" src="{{ asset('public/images/slider/'.$e->img) }}" />
                                        <div class="clear"></div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 hidden-xs hidden-sm hidden-md" style="padding-left:0;">
                    <button type="button" class="btn btn-danger button-support" data-toggle="modal" data-target="#supportonlineModal"><img src="http://fptcamera.vn/resources/ui_images/client/background/yahoo-smile.png">&nbsp;Hỗ trợ trực tuyến</button>
                    @foreach($slider->where('layout', 'right')->all() as $e)
                    <a class="b_a" href="{{ $e->href }}"><img title="{{ $e->title }}" src="{{ asset('public/images/slider/'.$e->img) }}"></a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="col-xs-12 hidden-xs hidden-sm">
            <div id="sub-menu">
                <div class="row">
                    <div class="col-xs-12 col-lg-7">
                        <div class="contain">
                            <a href='#'>Sơ lược công ty</a>
                            <a href='#'>Chính sách ưu đãi</a>
                            <a href='#'>Tin camera</a>
                            <a href='#'>Liên hệ</a>
                        </div>
                    </div>
                    <div class="col-lg-5 hidden-xs hidden-sm hidden-md">
                        <div class="newsslider">
                            <ul class="slides">
                                <li>
                                    <a href="#">Lắp đặt camera giám sát khu công nghiệp</a>
                                </li>
                                <li>
                                    <a href="#">lắp đặt camera quan sát tại  Bắc Giang</a>
                                </li>
                                <div class="clear"></div>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="col-xs-12">
            @foreach($slides as $e)
            @if($e->id_root==0 && $e->status==1)
            <ul class="nav nav-tabs custom-tabs " role="tablist">
                <li role="presentation" class="active"><a href="{{url('/category/'.$e->id.'/1')}}">{{$e->name}}</a></li>
                @foreach($category as $cate1)
                @if($e->id == $cate1->id_root && $cate1->status==1)
                <li class="hidden-xs hidden-sm" role="presentation"><a href="{{url('/category/'.$cate1->id.'/1')}}">{{$cate1->name}}</a></li>
                @endif
                @endforeach
            </ul>
            <div class="tab-content ">
                <div role="tabpanel" class="tab-pane active" >
                    <div class="row">
                        <div class="col-xs-12 col-lg-9">
                            <div class="row">
                                @php
                                $products = DB::select('SELECT product.* FROM slide INNER JOIN slide_product ON slide_product.id_slide = slide.id INNER JOIN product ON slide_product.id_product = product.id
                                WHERE slide.id_category = ?', [$e->id]);
                                @endphp
                                @foreach ($products as $element)
                                <div class="col-xs-6 col-sm-4 col-lg-3 ">
                                    <div class="thumbnail products">
                                        <a href="{{url('/detail-product/'.$element->id)}}"><img alt="{{$element->name}}" src="{{ asset('public/images/san-pham/'.$element->img) }}"></a>
                                        <div class="caption">
                                            <a href="{{url('/detail-product/'.$element->id)}}"><h3>{!!$element->name!!}</h3></a>
                                            <div class="clear"></div>
                                            <span class="new-price">{!!number_format($element->price)!!} VNĐ</span>
                                            {{-- <span class="old-price">2.500.000 đ</span> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-3 hidden-xs hidden-sm hidden-md">
                            <a class="b_a2" href="{{url('/category/'.$e->id.'/1')}}"><img alt="lap-camera-giam-sat-khong-day-wifi" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/{{$e->img}}"></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
        <div class="col-xs-12 hidden-xs hidden-sm">
            <div class="text-header">Camera các hãng</div>
            <div class="galleryslider">
                <ul class="slides">
                    <li>
                        <a href="http://fptcamera.vn/camera-vantech"><img alt="Camera Vantech Giá Rẻ" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-vantech.jpg"/></a>
                    </li>
                    <li>
                        <a href="http://fptcamera.vn/camera-benco"><img alt="Camera Benco Giá Rẻ" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hang-benco1.jpg"/></a>
                    </li>
                    <li>
                        <a href="http://fptcamera.vn/camera-dahua"><img alt="Camera Dahua Đài Loan" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-dahua.jpg"/></a>
                    </li>
                    <li>
                        <a href="http://fptcamera.vn/camera-questek"><img alt="Camera Questek Việt Nam" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-questek.jpg"/></a>
                    </li>
                    <li>
                        <a href="http://fptcamera.vn/camera-hikvision"><img alt="Camera HIKVISION" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hikvision-dai-loan.jpg"/></a>
                    </li>
                    <li>
                        <a href="http://fptcamera.vn/camera-spyeye"><img alt="Camera Spyeye" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-spyeye-gia-re1.jpg"/></a>
                    </li>
                    <li>
                        <a href="http://fptcamera.vn/camera-avtech"><img alt="Camera AVTECH ĐÀI LOAN" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-samsung.jpg"/></a>
                    </li>
                    <li>
                        <a href="http://fptcamera.vn/camera-kce"><img alt="Camera KCE HÀN QUỐC" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-KCE-han-quoc.jpg"/></a>
                    </li>
                    <li>
                        <a href="http://fptcamera.vn/camera-kce"><img alt="Camera SAMSUNG HÀN QUỐC" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hang-samsung.jpg"/></a>
                    </li>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
        <div class="col-xs-12 hidden-xs hidden-sm">
            <div class="text-header">Chấp nhận thanh toán</div>
            <img style="width:100%;margin:10px 0;" alt="Chấp nhận thanh toán" src="http://fptcamera.vn/resources/ui_images/client/background/payments.png">
        </div>
    </div>
</div>
</div>
</div>
@endsection