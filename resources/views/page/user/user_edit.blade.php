@extends('layout')
@section('content')
<div class="col-sm-8">
    <div class="signup-form">
        <!--sign up form-->
        <h2>Thông Tin Tài khoản</h2>
        @foreach ($edit_user as $key => $edit_value)
        <?php
	$message = Session::get('message');
	if($message){
		echo '<span class="text-alert" style="color: red">'.$message.'</span>';
		Session::put('message',null);
	}
	?>
        <form action="{{ URL::to('/update-customer/' . $edit_value->customer_id) }}" method="POST">
            {{ csrf_field() }}
            <input type="text" name="customer_name" value="{{$edit_value->customer_name}}" placeholder="Họ và tên" />
            <input type="email" name="customer_email" value="{{$edit_value->customer_email}}"
                placeholder="Địa chỉ email" />
            <input type="password" name="customer_password" value="{{$edit_value->customer_password}}"
                placeholder="Mật khẩu" />
            <input type="text" name="customer_phone" value="{{ $edit_value->customer_phone }}"
                placeholder=" Số điện thoại" />
            <input type="text" name="customer_address" value="{{ $edit_value->customer_address }}"
                placeholder="Địa chỉ thường chú" />
            <button type="submit" class="btn btn-default">Chỉnh sửa thônng tin</button>
        </form>
    </div>
    <!--/sign up form-->
</div>
@endforeach
@endsection