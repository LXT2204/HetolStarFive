@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông tin khách đặt phòng
        </div>
        <div class="row w3-res-tb">



        </div>
        <div class="table-responsive">
            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>

                        <th>Tên người đặt</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>




                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$order_by_id->customer_name}}</td>
                        <td>{{$order_by_id->customer_phone}}</td>
                        <td>{{$order_by_id->customer_email}}</td>





                </tbody>
            </table>
        </div>


    </div>
</div>
<br></br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông tin người nhận phòng </div>
        <div class="row w3-res-tb">



        </div>
        <div class="table-responsive">
            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>

                        <th>Tên người nhận phòng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Ghi chú</th>






                </thead>
                <tbody>

                    <tr>
                        <td>{{$order_by_id->booking_name}}</td>
                        <td>{{$order_by_id->booking_phone}}</td>
                        <td>{{$order_by_id->booking_email}}</td>
                        <td>{{$order_by_id->booking_address}}</td>
                        <td>{{$order_by_id->booking_notes}}</td>




                    </tr>

                </tbody>
            </table>
        </div>


    </div>
</div>
<br></br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Thông tin đơn đặt phòng
        </div>
        <div class="row w3-res-tb">



        </div>
        <div class="table-responsive">
            <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>

                        <th>Tên phòng</th>
                        <th>Giá phòng</th>
                        <th>Số ngày đặt</th>
                        <th>Tổng tiền</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>{{$order_by_id->room_name}}</td>
                        <td>{{$order_by_id->room_price}}</td>
                        <td><?php
$first_date = strtotime($order_by_id->checkin);
$second_date = strtotime($order_by_id->checkout);
$datediff = abs($first_date - $second_date);
echo floor($datediff / (60*60*24));
?></td>
                        <td>{{$order_by_id->order_total}}
                        </td>


                        <td>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <form role="form" action="{{ URL::to('/accept/' . $order_by_id->order_id) }}" method="post">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-success">Xác
                        nhận </button>
                </form>
                <form role="form" action="{{ URL::to('/refuse/' . $order_by_id->order_id) }}" method="post">
                    {{ csrf_field() }}

                    <button type="submit" class="btn btn-danger">Từ chối</button>
                </form>

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                    </ul>
                </div>
            </div>
        </footer>

    </div>
</div>
<br></br>


@endsection