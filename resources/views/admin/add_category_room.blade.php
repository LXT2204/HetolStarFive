@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục loại phòng
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
                        <form role="form" action="{{ URL::to('/save-category-room') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Loại Phòng</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();"
                                    name="category_room_name" id="slug" placeholder="danh mục">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả loại phòng</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="category_room_desc" id="exampleInputPassword1"
                                    placeholder="Mô tả danh mục"></textarea>
                            </div>
                            <div class="form-group">
                                <input type = "hidden" style="resize: none" rows="8" class="form-control" name="category_room_keywords"
                                    id="exampleInputPassword1" placeholder="Mô tả danh mục" value="a"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <select name="category_room_status" class="form-control input-sm m-bot15">
                                    <option value="0">Hiển thị</option>
                                    <option value="1">Ẩn</option>

                                </select>
                            </div>

                            <button type="submit" name="add_category_room" class="btn btn-info">Thêm danh mục</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection
