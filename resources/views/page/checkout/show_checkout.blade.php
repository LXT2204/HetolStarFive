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
        </div>
        <!--/register-req-->

        <div class="shopper-informations">
            <div class="row">

                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <p>Điền thông tin khách hàng người nhận phòng</p>
                        <div class="form-one">
                            <form action="{{URL::to('/save-checkout-customer')}}" method="POST">
                                @csrf
                                <input type="text" name="booking_email" class="booking_email" placeholder="Điền email">
                                <input type="text" name="booking_name" class="booking_name"
                                    placeholder="Họ và tên người nhận phòng">
                                <input type="text" name="booking_address" class="booking_address"
                                    placeholder="Địa chỉ ">
                                <input type="text" name="booking_phone" class="booking_phone"
                                    placeholder="Số điện thoại">
                                <textarea name="booking_notes" class="booking_notes" placeholder="Ghi chú cho khách sạn"
                                    rows="5"></textarea>
                                    <?php
	$message = Session::get('message');
	if($message){
		echo '<span class="text-alert" style="color: red">'.$message.'</span>';
		Session::put('message',null);
	}
	?>





                                <input type="submit" value="Xác nhận đơn đặt phòng" name="send_order"
                                    class="btn btn-primary btn-sm send_order">
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


                    </div>
                </div>

            </div>
        </div>




    </div>
</section>
<!--/#cart_items-->

@endsection