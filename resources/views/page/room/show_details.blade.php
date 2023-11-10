@extends('layout')
@section('content')
    @foreach ($room_details as $key => $value)
        <div class="room-details"><!--room-details-->
            <div class="col-sm-5">
                <div class="view-room">
                    <img src="../../../../public/uploads/room/{{ $value->room_image }}" alt=""
                        height="200"witdh="200" />
                    <h3>ZOOM</h3>
                </div>
                <div id="similar-room" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <a href=""><img src="{{ URL::to('public/frontend/images/similar1.jpg') }}"
                                    alt="1"></a>
                            <a href=""><img src="{{ URL::to('public/frontend/images/similar2.jpg') }}"
                                    alt="2"></a>
                            <a href=""><img src="{{ URL::to('public/frontend/images/similar3.jpg') }}"
                                    alt="3"></a>
                        </div>



                    </div>

                    <!-- Controls -->
                    <a class="left item-control" href="#similar-room" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right item-control" href="#similar-room" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-sm-7">
                <div class="room-information"><!--/room-information-->
                    <img src="images/room-details/new.jpg" class="newarrival" alt="" />
                    <h2>{{ $value->room_name }}</h2>
                    <p>Mã ID: {{ $value->room_id }}</p>
                    <img src="images/room-details/rating.png" alt="" />

                    <form action="{{ URL::to('/save-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $value->room_id }}" class="cart_room_id_{{ $value->room_id }}">

                        <input type="hidden" value="{{ $value->room_name }}" class="cart_room_name_{{ $value->room_id }}">

                        <input type="hidden" value="{{ $value->room_image }}"
                            class="cart_room_image_{{ $value->room_id }}">



                        <input type="hidden" value="{{ $value->room_price }}"
                            class="cart_room_price_{{ $value->room_id }}">

                        <span>
                            <h3 style="color:orange">{{ number_format($value->room_price, 0, ',', '.') . 'VNĐ' }} /Ngày
                            </h3>


                            <input name="roomid_hidden" type="hidden" value="{{ $value->room_id }}" />
                        </span>
                        <input type="button" value="Đặt phòng" class="btn btn-primary btn-sm add-to-cart"
                            data-id_room="{{ $value->room_id }}" name="add-to-cart">
                    </form>

                    <p><b>Tình trạng:</b> Còn phòng</p>


                    <p><b>Danh mục:</b> {{ $value->category_name }}</p>
                    <a href=""><img src="images/room-details/share.png" class="share img-responsive"
                            alt="" /></a>
                </div><!--/room-information-->
            </div>
        </div><!--/room-details-->

        <div class="category-tab shop-details-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Mô tả</a></li>
                    <li><a href="#companyprofile" data-toggle="tab">Dịch vụ phòng</a></li>

                    <li><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="details">
                    <p>{!! $value->room_desc !!}</p>

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
        </div><!--/category-tab-->
    @endforeach

    </div><!--/recommended_items-->
    {{--   <ul class="pagination pagination-sm m-t-none m-b-none">
                       {!!$relate->links()!!}
                      </ul> --}}
@endsection
