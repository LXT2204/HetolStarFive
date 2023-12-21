@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật phòng
            </header>
            <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
            <div class="panel-body">

                <div class="position-center">
                    @foreach ($edit_room as $key => $pro)
                    <form role="form" action="{{ URL::to('/update-room/' . $pro->room_id) }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên phòng</label>
                            <input type="text" name="room_name" class="form-control" onkeyup="ChangeToSlug();" id="slug"
                                value="{{ $pro->room_name }}">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá phòng</label>
                            <input type="text" value="{{ $pro->room_price }}" name="room_price" class="form-control"
                                id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh phòng</label>
                            <input type="file" name="room_image" class="form-control" id="exampleInputEmail1">
                            <img src=" ../../../../../public/uploads/room/{{$pro->room_image}}" height="100"
                                width="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả phòng</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="room_desc"
                                id="ckeditor2">{{ $pro->room_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tiện ích phòng</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="room_content"
                                id="ckeditor3">{{ $pro->room_content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục phòng</label>
                            <select name="room_cate" class="form-control input-sm m-bot15">
                                @foreach ($cate_room as $key => $cate)
                                @if ($cate->category_id == $pro->category_id)
                                <option selected value="{{ $cate->category_id }}">
                                    {{ $cate->category_name }}</option>
                                @else
                                <option value="{{ $cate->category_id }}">{{ $cate->category_name }}
                                </option>
                                @endif
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="room_status" class="form-control input-sm m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>

                            </select>
                        </div>

                        <button type="submit" name="add_room" class="btn btn-info">Cập nhật phòng</button>
                    </form>
                    @endforeach
                </div>

            </div>
        </section>

    </div>
    @endsection