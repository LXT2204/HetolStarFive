@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm User
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
                        <form role="form" action="{{ URL::to('/save-user') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputName">Họ và Tên</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();"
                                    name="user_name" id="slug" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();"
                                    name="user_email" id="slug" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mật khẩu</label>
                                <input type="password" class="form-control" onkeyup="ChangeToSlug();"
                                    name="user_password" id="slug" >
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">SĐT</label>
                                <input type="text" class="form-control" onkeyup="ChangeToSlug();"
                                    name="user_phone" id="slug" >
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Địa chỉ</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="user_address" id="exampleInputPassword1"
                                    ></textarea>
                                </select>
                            </div>

                            <button type="submit" name="add_user" class="btn btn-info">Thêm user</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    @endsection
