@extends('layout')
@section('content')
@foreach ($room_details as $key => $value)
<style>
.view-room {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}

.slider-detailr-container-detail {
    height: 350px;
    width: 550px;
    position: relative;
    overflow: hidden;
    text-align: center;
    background-image: url("../../../../public/uploads/room/{{ $value->room_image }}");
z-index: 200;
}

.menu_detail {
    position: absolute;
    left: 0;
    z-index: 100;
    width: 100%;
    bottom: 0;
}

.menu_detail label {
    cursor: pointer;
    display: inline-block;
    width: 16px;
    height: 16px;
    background: black;
    border-radius: 50px;
    margin: 0 .2em 1em;
    transition: all .3s ease;

    &:hover {
        background: red;
    }
}

.slider-detail {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 100%;
    z-index: 10;
    padding: 8em 1em 0;
    background-size: cover;
    background-position: 50% 50%;
    transition: left 0s .75s;
}

[id^="slider-detail"]:checked+.slider-detail {
    left: 0;
    z-index: 100;
    transition: left .65s ease-out;
}

.slider-detail-1 {
    background-image:url("../../../../public/uploads/room/{{ $value->room_image }}");
}

.slider-detail-2 {
    background-image: url("../../../../public/frontend/images/product-details/2.jpg");
}

.slider-detail-3 {
    background-image: url("../../../../public/frontend/images/product-details/3.jpg");
}
</style>
<div class="room-details">
    <!--room-details-->
    <div class="col-sm-8">
        <div class="view-room">
            <div class="slider-detailr-container-detail">
               
                <input id="slider-detail-dot-1" type="radio" name="slider-details" checked>
                <div class="slider-detail slider-detail-1"></div>

                <input id="slider-detail-dot-2" type="radio" name="slider-details">
                <div class="slider-detail slider-detail-2"></div>

                <input id="slider-detail-dot-3" type="radio" name="slider-details">
                <div class="slider-detail slider-detail-3"></div>
                <div class="menu_detail">
                    <label for="slider-detail-dot-1"></label>
                    <label for="slider-detail-dot-2"></label>
                    <label for="slider-detail-dot-3"></label>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="col-sm-4">
    <div class="room-information">
        <!--/room-information-->
        <img src="images/room-details/new.jpg" class="newarrival" alt="" />
        <h2>{{ $value->room_name }}</h2>
        <p>Mã ID: {{ $value->room_id }}</p>
        <img src="images/room-details/rating.png" alt="" />

        <form action="{{ URL::to('/save-cart') }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $value->room_id }}" class="cart_room_id_{{ $value->room_id }}">

            <input type="hidden" value="{{ $value->room_name }}" class="cart_room_name_{{ $value->room_id }}">

            <input type="hidden" value="{{ $value->room_image }}" class="cart_room_image_{{ $value->room_id }}">



            <input type="hidden" value="{{ $value->room_price }}" class="cart_room_price_{{ $value->room_id }}">

            <span>
                <h3 style="color:orange">{{ number_format($value->room_price, 0, ',', '.') . 'VNĐ' }} /Ngày
                </h3>
                <div><label>Ngày Checkin: </label>
                    <input name="qty_checkin" type="date" class="cart_room_qty_checkin{{$value->room_id}}"
                        value="NULL" />
                </div>
                <div><label>Ngày Checkout: </label>
                    <input name="qty_checkout" type="date" class="cart_room_qty_checkout{{$value->room_id}}"
                        value="NULL" />
                    <input name="roomid_hidden" type="hidden" value="{{$value->room_id}}" />
                </div>
                <?php
	$message = Session::get('message');
	if($message){
		echo '<span class="text-alert" style="color: red">'.$message.'</span>';
		Session::put('message',null);
	}
	?>
                <div> <input type="submit" value="Đặt phòng" class="btn btn-primary btn-sm add-to-cart"
                    data-id_room="{{ $value->room_id }}" name="add-to-cart">
              

            </span>
            
     </div>
     
        </form>

        <p><b>Tình trạng:</b> Còn phòng</p>


        <p><b>Loại Phòng:</b> {{ $value->category_name }}</p>
        <a href=""><img src="images/room-details/share.png" class="share img-responsive" alt="" /></a>
    </div>
    <!--/room-information-->
</div>
</div>
<!--/room-details-->

<div class="category-tab shop-details-tab">
    <!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
            <li><a href="#companyprofile" data-toggle="tab">Dịch vụ phòng</a></li>
<!-- 
            <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li> -->
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="details">
            <p>{!! $value->room_desc !!}</p>

        </div>
        <div class="tab-pane fade active in" id="companyprofile">
            <p>{!! $value->room_content!!}</p>

        </div>

        <div class="tab-pane fade" id="reviews">
            <div class="col-sm-12">
                <ul>
                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p><b>Write Your Review</b></p>

                <form action="#">
                    <span>
                        <input type="text" placeholder="Your Name" />
                        <input type="email" placeholder="Email Address" />
                    </span>
                    <textarea name=""></textarea>
                    <b>Rating: </b> <img src="images/room-details/rating.png" alt="" />
                    <button type="button" class="btn btn-default pull-right">
                        Submit
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>
<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Các phòng gợi ý</h2>

   
            <div class="item active">
                @foreach($relate as $key => $lienquan)
                <div class="col-sm-4">
                    <div class="room-image-wrapper">
                        <div class="single-rooms">
                            <div class="roominfo text-center room-related">
                            <a href="{{ URL::to('/chi-tiet/' . $lienquan->room_id) }}">                             
                                   <img src="../../../../public/uploads/room/{{ $lienquan->room_image }}" alt="" />
                                <h2>{{number_format($lienquan->room_price,0,',','.').' '.'VNĐ'}}</h2>
                                <p>{{$lienquan->room_name}}</p>

                            </div>
</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!--/recommended_items-->
            {{--   <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$relate->links()!!}
                      </ul> --}}
        </div>
    </div>
</div>
<!--/category-tab-->
@endforeach

            @endsection