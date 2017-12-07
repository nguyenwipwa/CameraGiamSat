@extends('layouts.subClient')
@section('content')
<!-- Top end here -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="row hidden-xs hidden-sm">
                <div class="col-xs-12">
                    <div class="header">
                        <span>Giỏ hàng</span>
                    </div>
                    <form action="{{ route('updateCart') }}" method="post" accept-charset="utf-8">
                        <table id="cart">
                            @if(Cart::count()==0)
                            <tbody>
                                <tr>
                                    <th>Giỏ hàng trống</th>
                                </tr>
                            </tbody>
                            @else
                            <tr>
                                <th></th>
                                <th>Mã - Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>

                            @foreach(Cart::content() as $row)
                            <tr>
                                <td><a title="Xóa sản phẩm" style="font-size:20px;color:#000;" href="{{ route('removeCart', ['rowId' => $row->rowId]) }}"><i class="fa fa-trash"></i></a>
                                </td>
                                <td><b>{{ $row->name }}</b>
                                </td>
                                <td><img class="cart_img" src="{{ asset('public/images/san-pham/'.$row->options->img) }}">
                                </td>
                                <td>{{ number_format($row->price)}} VNĐ</td>
                                <td style="width:92px;">
                                    <input class="cart_qty form-control" min="1" type="number" name="{{ $row->rowId }}" value="{{ $row->qty }}" />
                                </td>
                                <td>{{ number_format($row->subtotal)}} VNĐ</td>
                            </tr>
                            @endforeach
                            <tr>
                                {{ csrf_field() }}
                                <td colspan="5">Tổng cộng</td>
                                <td style="color:#ff0000;font-weight:bold;">{{ Cart::total() }} VNĐ</td>
                            </tr>
                            <tr class="no-border">
                                <td colspan="6">
                                    <input class="btn1" type="button" value="Xóa giỏ hàng" onclick="clear_cart()" />
                                    <input style="margin-left:5px;" class="btn1" type="button" value="Tiếp tục mua hàng" onclick="location.href='{{ url('/') }}'" />
                                    <input style="float:right;margin-left:5px" class="btn2" type="button" value="Thanh toán" onclick="location.href='{{ route('payment') }}'" />
                                    <input style="float:right;margin:5px" class="btn3" type="submit" value="Cập nhật số lượng" />

                                </td>
                            </tr>
                            @endif
                        </table>
                    </form>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="row hidden-lg hidden-md">
                <div class="col-xs-12">
                    <div class="header">
                        <span>Giỏ hàng</span>
                    </div>
                    <form action="{{ route('updateCart') }}" method="post" accept-charset="utf-8">
                        <table id="cart">
                            @if(Cart::count()==0)
                            <tbody><tr>
                                <th>Giỏ hàng trống</th>
                            </tr>
                        </tbody>
                        @else
                        @foreach(Cart::content() as $row)
                        <tr>
                            <td colspan="2"><b>{{ $row->name }}</b>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><img class="cart_img" src="{{ asset('public/images/san-pham/'.$row->options->img) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>{{ number_format($row->price)}} VNĐ</td>
                            <td style="width:92px;">
                                <input class="cart_qty form-control" type="number" maxlength="3" size="1" name="{{ $row->rowId }}" value="{{ $row->qty }}" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text_last" colspan="2">{{ number_format($row->subtotal)}} VNĐ</td>
                        </tr>
                        @endforeach

                        {{ csrf_field() }}

                        <tr>
                            <td colspan="2">Tổng cộng</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="color:#ff0000;font-weight:bold;">{{ Cart::total() }} VNĐ</td>
                        </tr>
                        <tr class="no-border">
                            <td colspan="2">
                                <input class="btn1" type="button" value="Xóa giỏ hàng" onclick="clear_cart()" />
                                <input class="btn1" type="button" value="Tiếp tục mua hàng" onclick="location.href='{{ url('/') }}'" />
                                <input class="btn3" type="submit" value="Cập nhật số lượng" />
                                <input class="btn2" type="button" value="Thanh toán" onclick="location.href='{{ route('payment') }}'" />
                            </td>
                        </tr>
                        @endif
                    </table>
                </form>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="clear"></div>
</div>

<script type="text/javascript" charset="utf-8">
    function clear_cart() {
        var result = confirm('Bạn muốn hủy giỏ hàng ?');
        if (result) {
            window.location = "{{route('deleteCartAll')}}";
        } else {
                return false; // cancel button
            }
        }
    </script>
    @endsection