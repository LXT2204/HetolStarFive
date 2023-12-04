@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật user
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    @foreach ($edit_customer as $key => $edit_value)
                        <div class="position-center">
                            <form role="form" action="{{ URL::to('/update-user/' . $edit_value->customer_id) }}"
                                method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Họ và tên</label>
                                    <input type="text" value="{{ $edit_value->customer_name }}" onkeyup="ChangeToSlug();"
                                        name="user_name" class="form-control" id="slug">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" value="{{ $edit_value->customer_email }}" onkeyup="ChangeToSlug();"
                                        name="user_email" class="form-control" id="slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật khẩu</label>
                                    <input type="password" value="{{ $edit_value->customer_password }}" onkeyup="ChangeToSlug();"
                                        name="user_password" class="form-control" id="slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SĐT</label>
                                    <input type="text" value="{{ $edit_value->customer_phone }}" onkeyup="ChangeToSlug();"
                                        name="user_phone" class="form-control" id="slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <input type="text" value="{{ $edit_value->customer_address }}" onkeyup="ChangeToSlug();"
                                        name="user_address" class="form-control" id="slug">
                                </div>
                                <button type="submit" name="update_user" class="btn btn-info">Cập nhật user</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>

        </div>
    @endsection
