@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm phòng
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
                        <form role="form" action="{{ URL::to('/save-room') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên phòng</label>
                                <input type="text" data-validation="length" data-validation-length="min10"
                                    data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="room_name"
                                    class="form-control " id="slug" placeholder="Tên" onkeyup="ChangeToSlug();">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá phòng</label>
                                <input type="text" data-validation="number"
                                    data-validation-error-msg="Làm ơn điền số tiền" name="room_price" class="form-control"
                                    id="" placeholder="Giá">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh phòng</label>
                                <input type="file" name="room_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả phòng</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="room_desc" id="ckeditor1"
                                    placeholder="Mô tả phòng"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung phòng</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="room_content" id="id4"
                                    placeholder="Nội dung phòng"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Danh mục phòng</label>
                                <select name="room_cate" class="form-control input-sm m-bot15">
                                    @foreach ($cate_room as $key => $cate)
                                        <option value="{{ $cate->category_id }}">{{ $cate->category_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Hiển thị</label>
                                <select name="room_status" class="form-control input-sm m-bot15">
                                    <option value="0">Hiển thị</option>
                                    <option value="1">Ẩn</option>

                                </select>
                            </div>

                            <button type="submit" name="add_room" class="btn btn-info">Thêm phòng</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection
