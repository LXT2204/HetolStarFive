@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê phòng
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                  
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                     
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            
                            <th>Tên phòng</th>
                            <th>Giá</th>
                            <th>Hình phòng</th>
                            <th>Danh mục</th>
                            <th>Hiển thị</th>

                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_room as $key => $room)
                            <tr>
                              
                                </td>
                                <td>{{ $room->room_name }}</td>
                                <td>{{ $room->room_price }}đ</td>

                                <td><img src=" ../../../../../public/uploads/room/{{ $room->room_image }}" height="100"
                                        width="100">
                                </td>
                                <td>{{ $room->category_name }}</td>

                                <td><span class="text-ellipsis">
                                        <?php
               if($room->room_status==0){
                ?>
                                        <a href="{{ URL::to('/unactive-room/' . $room->room_id) }}"><span
                                                class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                        <?php
                 }else{
                ?>
                                        <a href="{{ URL::to('/active-room/' . $room->room_id) }}"><span
                                                class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                        <?php
               }
              ?>
                                    </span></td>

                                <td>
                                    <a href="{{ URL::to('/edit-room/' . $room->room_id) }}" class="active styling-edit"
                                        ui-toggle-class="">
                                        <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                    <a onclick="return confirm('Bạn có chắc là muốn xóa phòng này ko?')"
                                        href="{{ URL::to('/delete-room/' . $room->room_id) }}" class="active styling-edit"
                                        ui-toggle-class="">
                                        <i class="fa fa-times text-danger text"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            {!! $all_room->links() !!}
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
