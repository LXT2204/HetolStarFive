@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật danh mục phòng
            </header>
            
            <div class="panel-body">
                @foreach ($edit_category_room as $key => $edit_value)
                <div class="position-center">
                    <form role="form" action="{{ URL::to('/update-category-room/' . $edit_value->category_id) }}"
                        method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{ $edit_value->category_name }}" onkeyup="ChangeToSlug();"
                                name="category_room_name" class="form-control" id="slug">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize: none" rows="8" class="form-control" name="category_room_desc"
                                id="exampleInputPassword1">{{ $edit_value->category_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Từ khóa danh mục</label>
                            <input type="hidden"  class="form-control" name="category_room_status"
                                id="exampleInputPassword1"
                                value="{{ $edit_value->category_status }}"></textarea>
                        </div>
                        <button type="submit" name="update_category_room" class="btn btn-info">Cập nhật danh
                            mục</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>
    @endsection