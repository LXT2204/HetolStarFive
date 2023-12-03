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

			<div class="register-req">
				<p>Vui lòng đăng ký hoặc đăng nhập để thanh toán </p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Điền thông tin khách hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									@csrf
									<input type="text" name="booking_email" class="booking_email" placeholder="Điền email">
									<input type="text" name="booking_name" class="booking_name" placeholder="Họ và tên người đặt">
									<input type="text" name="booking_address" class="booking_address" placeholder="Địa chỉ ">
									<input type="text" name="booking_phone" class="booking_phone" placeholder="Số điện thoại">
									<textarea name="booking_notes" class="booking_notes" placeholder="Ghi chú cho khách sạn" rows="5"></textarea>
									
									
									
									
									
									<div class="">
										 <div class="form-group">
		                                    <label for="exampleInputPassword1">Chọn hình thức thanh toán</label>
		                                      <select name="payment_select"  class="form-control input-sm m-bot15 payment_select">
		                                            <option value="0">Qua chuyển khoản</option>
		                                            <option value="1">Tiền mặt</option>   
		                                    </select>
		                                </div>
									</div>
									<input type="submit" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
								</form>
							

							</div>
							
						</div>
					</div>
					<div class="col-sm-12 clearfix">
						  @if(session()->has('message'))
			                    <div class="alert alert-success">
			                        {!! session()->get('message') !!}
			                    </div>
			                @elseif(session()->has('error'))
			                     <div class="alert alert-danger">
			                        {!! session()->get('error') !!}
			                    </div>
			                @endif
						<div class="table-responsive cart_info">

							<form action="{{url('/update-cart')}}" method="POST">
								@csrf
							<table class="table table-condensed">
								<thead>
									<tr class="cart_menu">
										<td class="image">Hình ảnh</td>
										<td class="description">Tên phòng</td>
										<td class="price">Giá phòng</td>
										<td class="quantity">Số lượng</td>
										<td class="total">Thành tiền</td>
										<td></td>
									</tr>
								</thead>
								<tbody>
									

									<tr>
										<td class="cart_room">
											
										</td>
										<td class="cart_description">
											<h4><a href=""></a></h4>
											
										</td>
										<td class="cart_price">
											
										</td>
										<td class="cart_quantity">
											<div class="cart_quantity_button">
											
											
											
											
												
											</div>
										</td>
										<td class="cart_total">
											<p class="cart_total_price">
											
												
											</p>
										</td>
										<td class="cart_delete">
										
										</td>
									</tr>
									
									<tr>
										<td><input type="submit" value="Cập nhật giỏ hàng" name="update_qty" class="check_out btn btn-default btn-sm"></td>
										<td><a class="btn btn-default check_out" href="{{url('/del-all-room')}}">Xóa tất cả</a></td>
										<td>
											
										</td>

										
										<td colspan="2">
										
										
										</li>
										
									</td>
									</tr>
									
								</tbody>

								

							</form>
								@if(Session::get('cart'))
								<tr><td>

										<form method="POST" action="{{url('/check-coupon')}}">
											@csrf
												<input type="text" class="form-control" name="coupon" placeholder="Nhập mã giảm giá"><br>
				                          		<input type="submit" class="btn btn-default check_coupon" name="check_coupon" value="Tính mã giảm giá">
				                          	
			                          		</form>
			                          	</td>
								</tr>
								@endif

							</table>

						</div>
					</div>
									
				</div>
			</div>
		

			
			
		</div>
	</section> <!--/#cart_items-->

@endsection