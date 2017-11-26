@extends('layouts.subClient')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 pad-btm">
            <div class="row">
                <div class="col-xs-12 col-md-9">
                    <div class="article_header my-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Trang chủ</a>
                            </li>
                            <li><a href="{{ route('news') }}">Tin camera</a>
                            </li>
                        </ol>
                    </div>
                    <div class="clear"></div>
                    <h1 class="header2">
                    Tin camera   </h1>

                    <h2 style="display:none;"> Tin camera</h2>

                    <div class="clear"></div>
                    @foreach ($listNews as $news)
                    <div class="media news2">
                        <div class="row">
                            <div class="col-xs-12 col-md-4 full-right">
                                <div class="media-left">
                                    <a href="{{ route('news.detail', [$news->id]) }}">
                                        <img class="media-object" alt="{{ $news->title }}" src="{{ asset('public/images/tin-tuc/').'/'.$news->img }}">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-8 left-0">
                                <div class="media-body">
                                    <a href="{{ route('news.detail', [$news->id]) }}">
                                        <h4 class="media-heading">{{ $news->title }}</h4>
                                    </a>
                                    <span class="media-date"> Lượt xem: {{ $news->view_number }}</span>
                                    <span class="media-desc">{{ $news->decription }} <a href="{{ route('news.detail',[$news->id])}}" title="" style="background: #d36262;
                                    padding: 2px 10px;
                                    border-radius: 6px;
                                    color: #fff; float: right;">+ Xem thêm</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="clear"></div>
                    <div class="pagination">
                        {!!$listNews->render()!!}
                    </div>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="header" style="margin-top:0;">
                        <span>Danh mục tin tức</span>
                    </div>
                    <div class="body">
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/gioi-thieu">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Giới thiệu</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/chinh-sach">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Chính sách</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/tuyen-dung">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Tuyển dụng</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/khuyen-mai-lap-camera">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Khuyến mại lắp camera</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/thi-cong-lap-camera">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Thi công lắp camera</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/ho-tro-khach-hang">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Hỗ trợ khách hàng</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/sua-chua-camera-va-dau-ghi">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Sửa chữa camera và đầu ghi</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/xem-demo-camera">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Xem Demo camera</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/tin-camera">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Tin camera</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-tai-ha-noi">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Lắp đặt camera tại Hà Nội</h4>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="header">
                        <span>Tin tức mới</span>
                    </div>
                    <div class="body">
                        <div class="media news longer">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/tin-tuc/cach-tat-camera">
                                    <img class="media-object" alt="Cách tắt camera trong nhà và phòng chống" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/trom-tat-camera-giam-sat.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/cach-tat-camera">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>cách tắt camera</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-giam-sat-tai-soc-son">
                                    <img class="media-object" alt="Lắp đặt camera giám sát tại Sóc Sơn" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/lap-dat-camera-truong-hoc-mai-dinh-soc-son.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-giam-sat-tai-soc-son">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Lắp đặt camera giám sát tại Sóc Sơn</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/tin-tuc/camera-quan-sat-khi-mat-dien">
                                    <img class="media-object" alt="camera quan sat khi mat dien" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/camera-bi-tat-dien.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/camera-quan-sat-khi-mat-dien">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>camera quan sat khi mat dien</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/tin-tuc/lay-du-lieu-tu-o-cung-camera">
                                    <img class="media-object" alt="lấy dữ liệu từ ổ cứng camera" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/lam-sao-de-lay-du-lieu-tu-o-ung-camera.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/lay-du-lieu-tu-o-cung-camera">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>lấy dữ liệu từ ổ cứng camera</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/tin-tuc/-lam-sao-de-biet-camera-dang-hoat-dong">
                                    <img class="media-object" alt="​lam sao de biet camera dang hoat dong" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/cach-nhan-biet-camera-co-hoat-dong-khong.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/-lam-sao-de-biet-camera-dang-hoat-dong">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>​lam sao de biet camera dang hoat dong</h4>
                                </a>
                            </div>
                        </div>
                        <div class="media news longer">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/tin-tuc/cach-xoa-du-lieu-trong-camera">
                                    <img class="media-object" alt="Cách xóa dữ liệu trong camera" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/xoa-video-trong-camera.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/tin-tuc/cach-xoa-du-lieu-trong-camera">
                                    <h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Cách xóa dữ liệu trong camera</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="facebooku" style="margin-top: 10px;">
                        <div class="fb-page" data-href="https://www.facebook.com/FptCamera.vn" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/FptCamera.vn"><a href="https://www.facebook.com/FptCamera.vn">Fpt Security</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="header">
                        <span>Sản phẩm bán chạy</span>
                    </div>
                    <div class="body">
                        <div class="media products">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/camera-ip-wifi-khong-day-vantech-vt-6300a">
                                    <img class="media-object" alt="Camera IP Wifi Không Dây VANTECH VT-6300A" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/camera-ip-wifi-khong-day-vantech-vt-6300A.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/camera-ip-wifi-khong-day-vantech-vt-6300a">
                                    <h4 class="media-heading">Camera IP Wifi Không Dây VANTECH VT-6300A</h4>
                                </a>
                                <span class="media-price">1.250.000 đ</span>
                            </div>
                        </div>
                        <div class="media products">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/lap-dat-camera-gia-re-bo-1-den-8-mat">
                                    <img class="media-object" alt="Lắp đặt camera giá rẻ bộ 1 đến 8 mắt" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-camera-gia-re-benco.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/lap-dat-camera-gia-re-bo-1-den-8-mat">
                                    <h4 class="media-heading">Lắp đặt camera giá rẻ bộ 1 đến 8 mắt</h4>
                                </a>
                                <span class="media-price">2.199.000 đ</span>
                            </div>
                        </div>
                        <div class="media products">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/lap-2-camera-hikvision">
                                    <img class="media-object" alt="lap-2-camera-hikvision" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-2-camera-hikvision.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/lap-2-camera-hikvision">
                                    <h4 class="media-heading">Lắp 2 Camera HIKVISION</h4>
                                </a>
                                <span class="media-price">4.299.000 đ</span>
                            </div>
                        </div>
                        <div class="media products">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/lap-dat-camera-gia-re">
                                    <img class="media-object" alt="lap-dat-camera-gia-re-ha-noi" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-camera-gia-re-ha-noi.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/lap-dat-camera-gia-re">
                                    <h4 class="media-heading">Lắp đặt camera giá rẻ</h4>
                                </a>
                                <span class="media-price">2.199.000 đ</span>
                            </div>
                        </div>
                        <div class="media products">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/lap-dat-tron-bo-4-camera-gia-re">
                                    <img class="media-object" alt="Lắp Đặt Trọn Bộ 4 Camera Giá Rẻ" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-tron-bo-4-camera-gia-re.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/lap-dat-tron-bo-4-camera-gia-re">
                                    <h4 class="media-heading">Lắp Đặt Trọn Bộ 4 Camera Giá Rẻ</h4>
                                </a>
                                <span class="media-price">4.899.000 đ</span>
                            </div>
                        </div>
                        <div class="media products">
                            <div class="media-left">
                                <a href="http://fptcamera.vn/lap-dat-tron-bo-2-camera-hd">
                                    <img class="media-object" alt="Lắp đặt trọn bộ 2 camera HD" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-tron-bo-2-camera-AHD.jpg">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="http://fptcamera.vn/lap-dat-tron-bo-2-camera-hd">
                                    <h4 class="media-heading">Lắp đặt Trọn Bộ 2 Camera HD</h4>
                                </a>
                                <span class="media-price">4.299.000 đ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection