@extends('layouts.subClient')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 pad-btm">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="header">
                        <span>{{$name_cate}}</span>
                    </div>
                    <div class="body">
                      @foreach ($menu_left as $element)
                      
                      <a class="sort_list" href="{{url('/category/'.$element->id.'/1')}}">{{$element->name}}</a>
                      @endforeach
                      
                  </div>
              </div>
              <div class="col-xs-12 col-md-9">
                <!-- <div class="article_header my-breadcrumb"><ol class="breadcrumb"><li><a href="http://fptcamera.vn/">Trang chủ</a></li><li><a href="http://fptcamera.vn/thiet-bi-van-phong">Thiết bị văn phòng</a></li></ol></div> -->
                <div class="clear"></div>
                <div class="header4">
                    <h1>{{$name_cate}}</h1>
                    <h2 style="display:none;">{{$name_cate}}</h2>
                    <div class="clear"></div>
                    <select style="float:right;margin-top:3px;" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                        <option value="http://fptcamera.vn/thiet-bi-van-phong">Sắp xếp theo</option>
                        <option value="http://fptcamera.vn/thiet-bi-van-phong/?o=p-asc">Giá tăng dần</option>
                        <option value="http://fptcamera.vn/thiet-bi-van-phong/?o=p-desc">Giá giảm dần</option>
                    </select>
                </div>
                <div class="description2"></div>
                <div class="clear"></div>
                <div class="product_list">
                    <div class="row">
                     @foreach ($list_product as $e)
                     
                     <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="thumbnail products">
                            <a href="{{ url('/detail-product/'.$e->id)}}">
                                <img alt="may-chieu-sony-VPL-DX-122" src="{{ asset('public/images/san-pham/'.$e->img) }}">
                            </a>
                            <div class="caption">
                                <a href="{{url('/detail-product/'.$e->id)}}">
                                    <h3>{{$e->name}}</h3>
                                </a>
                                <div class="clear"></div>
                                <span class="new-price">{{number_format($e->price)}} VNĐ</span>
                                {{-- 
                                    <span class="old-price">11.800.000 đ</span> --}}
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="clear"></div>
                <div class="pagination">
                    <ul class='pagination'>
                        <li class='disabled'>
                            @for ($i = 1; $i <= $page_number ; $i++)
                            
                            <li class='@php if($page==$i) echo 'active'; @endphp'>
                                <a href='{{url('/category/'.$id_category.'/'.$i)}}'>{{$i}}
                                    <span class='sr-only'></span>
                                </a>
                            </li>
                            @endfor

                        </li>
                        <li>
                            <a href="#">Last &rsaquo;</a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection