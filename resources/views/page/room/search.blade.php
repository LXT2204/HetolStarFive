@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Kết quả tìm kiếm</h2>
                       <!-- @foreach($search_room as $key => $room)
                        <div class="col-sm-4">
                            <div class="room-image-wrapper">
                                <div class="single-rooms">
                                        <div class="roominfo text-center">
                                            <img src="{{URL::to('public/uploads/room/'.$room->room_image)}}" alt="" />
                                            <h2>{{number_format($room->room_price).' '.'VNĐ'}}</h2>
                                            <p>{{$room->room_name}}</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem chi tiết</a>
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
                    </div>features_items  -->
        <!--/recommended_items-->
@endsection