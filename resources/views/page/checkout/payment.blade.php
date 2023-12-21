@extends('layout')
@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                <li class="active">Thanh toán </li>
            </ol>
        </div>


        <div class="review-payment">
            <h2>Phòng đã chọn</h2>
        </div>
        <div class="table-responsive cart_info">
            <?php

				$content = Cart::Content();
				
				?>
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh</td>
                        <td class="description">Tên phòng</td>
                        <td class="Check_in">Checkin</td>
                        <td class="Check_out">Checkout</td>
                        <td class="quantity">Số ngày thuê</td>
                        <td class="total">Tổng Tiền</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($content as $v_content)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="../../../../public/uploads/room/{{$v_content->options->image}}"
                                    height="90" width="90" alt="" /></a>
                        </td>
                        <td class="cart_description">
                            <h4>{{$v_content->name}}</>
                            </h4>
                        </td>
                        <td class="checkin">

                            <form action="{{URL::to('/update-cart-quantity-checkin')}}" method="POST">
                                {{ csrf_field() }}
                                <input class="cart_quantity_input" type="date" name="cart_qty_checkin"
                                    value="{{$v_content->options->qty_checkin}}">
                                <input class="hidden" value="{{$v_content->options->qty_checkout}}"
                                    name="cart_qty_checkout">
                                <input type="hidden" value="{{$v_content->id}}" name="roomid_hidden"
                                    class="form-control">
                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart"
                                    class="form-control">
                                <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                            </form>
                        </td>
                        <td class="checkout">
                            <form action="{{URL::to('/update-cart-quantity-checkout')}}" method="POST">
                                {{ csrf_field() }}
                                <input class="cart_quantity_input" type="date" name="cart_qty_checkout"
                                    value="{{$v_content->options->qty_checkout}}">
                                <input class="hidden" value="{{$v_content->options->qty_checkin}}"
                                    name="cart_qty_checkin">
                                <input type="hidden" value="{{$v_content->id}}" name="roomid_hidden"
                                    class="form-control">
                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart"
                                    class="form-control">
                                <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                            </form>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">

                                <?php
									echo $v_content->qty;
									?>
                            </p>
                        </td>
                        <td>
                            <p class="cart_total_price">

                                <?php
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).' '.'vnđ';
									?>
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i
                                    class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <h4 style="margin:40px 0;font-size: 20px;">Chọn hình thức thanh toán</h4>
        <form method="POST" action="{{URL::to('/order-place')}}">
            {{ csrf_field() }}
            <div class="payment-options">
                <span>
                    <label><input name="payment_option" value="1" type="checkbox"> Trả bằng thẻ ATM</label>
                </span>
                <span>
                    <label><input name="payment_option" value="2" type="checkbox"> Nhận tiền mặt</label>
                </span>
                <span>
                    <label><input name="payment_option" value="3" type="checkbox"> Thanh toán thẻ ghi nợ</label>
                </span>
                <input type="submit" value="Đặt Phòng" name="send_order_place" class="btn btn-primary btn-sm">
            </div>
        </form>
    </div>
</section>
<!--/#cart_items-->

@endsection