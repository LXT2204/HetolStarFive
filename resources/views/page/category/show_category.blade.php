@extends('layout')
@section('content')
<div class="features_items">
    <!--features_items-->


    @foreach ($category_name as $key => $name)
    <h2 class="title text-center">{{ $name->category_name }}</h2>
    @endforeach
    @foreach ($category_by_id as $key => $room)
    <div class="col-sm-4">
        <div class="room-image-wrapper">

            <div class="single-rooms">
                <div class="roominfo text-center">
                    <form>
                        @csrf
                        <input type="hidden" value="{{ $room->room_id }}" class="cart_room_id_{{ $room->room_id }}">
                        <input type="hidden" value="{{ $room->room_name }}" class="cart_room_name_{{ $room->room_id }}">
                        <input type="hidden" value="{{ $room->room_image }}"
                            class="cart_room_image_{{ $room->room_id }}">

                        <input type="hidden" value="{{ $room->room_price }}"
                            class="cart_room_price_{{ $room->room_id }}">
                        <input type="hidden" value="1" class="cart_room_qty_{{ $room->room_id }}">

                        <a href="{{ URL::to('/chi-tiet/' . $room->room_id) }}">
                            <img src="../../../../public/uploads/room/{{ $room->room_image }}" alt="" height="200"
                                width="200" />
                            <h2>{{ number_format($room->room_price, 0, ',', '.') . ' ' . 'VNĐ' }}</h2>
                            <p>{{ $room->room_name }}</p>
                        </a>


                        <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart"
                            data-id_room="{{ $room->room_id }}" name="add-to-cart">
                    </form>

                </div>

            </div>

            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!--features_items-->
<ul class="pagination pagination-sm m-t-none m-b-none">
    {!! $category_by_id->links() !!}
</ul>

<!--/recommended_items-->
@endsection