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
								<a href=""><img src="../../../../public/uploads/room/{{$v_content->options->image}}" height="90" width="90" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4>{{$v_content->name}}</></h4>
							</td>
							<td class="checkin">

							<form action="{{URL::to('/update-cart-quantity-checkin')}}" method="POST">
									{{ csrf_field() }}
									<input class="cart_quantity_input" type="date" name="cart_qty_checkin" value="{{$v_content->options->qty_checkin}}"  >
									<input class="hidden" value="{{$v_content->options->qty_checkout}}" name="cart_qty_checkout" >
									<input type="hidden" value="{{$v_content->id}}" name="roomid_hidden" class="form-control">
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
									</form>
							</td>
							<td class="checkout">
							<form action="{{URL::to('/update-cart-quantity-checkout')}}" method="POST">
									{{ csrf_field() }}
									<input class="cart_quantity_input" type="date" name="cart_qty_checkout" value="{{$v_content->options->qty_checkout}}"  >
									<input class="hidden" value="{{$v_content->options->qty_checkin}}" name="cart_qty_checkin" >
									<input type="hidden" value="{{$v_content->id}}" name="roomid_hidden" class="form-control">
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
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
							<td >
							<p class="cart_total_price">
									
									<?php
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).' '.'vnđ';
									?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
		
			<div class="row">
			
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng <span>{{Cart::subtotal().' '.'vnđ'}}</span></li>
							<li>Thuế <span>{{Cart::tax().' '.'vnđ'}}</span></li>
							<li>Thành tiền <span>{{Cart::total(0).' '.'vnđ'}}</span></li>
						</ul>
						{{-- 	<a class="btn btn-default update" href="">Update</a> --}}
						<?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                  
                                <a class="btn btn-default check_out" href="{{URL::to('/checkout')}}">Thanh toán</a>
                                <?php
                            }else{
                                 ?>
                                 
                                 <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                                 <?php 
                             }
                                 ?>
                                
							

					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->


@endsection