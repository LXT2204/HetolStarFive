@extends('layout')
@section('content')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
				  <li class="active">Đơn đặt phòng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php

use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Exceptions;
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
							<td></td>
						</tr>
					</thead>
					<tbody>
					@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="../../../../public/upload/{{$v_content->options->image}}" width="90" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4>{{$v_content->name}}</></h4>
							</td>
							<td class="checkin">

								<p>{{$v_content->options->qty_checkin}}</p>
							</td>
							<td class="checkout">
								<p>{{$v_content->options->qty_checkout}}</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									
									<?php
									echo $v_content->qty;
									?>
								</p>
							</td>
							<td class="cart_delete">
							<p class="cart_total_price">
									
									<?php
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).' '.'vnđ';
									?>
								</p>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->




@endsection