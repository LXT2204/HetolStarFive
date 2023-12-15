@extends('layout')
@section('content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Liệt kê đặt phòng
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

                        <th>Thứ tự</th>
                        <th>Tên người đặt</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng đặt phòng</th>

                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 0;
                    @endphp
                    @foreach($all_order as $key => $ord)
                    @php
                    $i++;
                    @endphp
                    <tr>
                        <td><i>{{$i}}</i></label></td>
                        <td>{{ $ord->customer_name }}</td>
                        <td>{{ number_format($ord->order_total, 0, ',', '.') . ' ' . 'VNĐ' }} </td>
                        <td>@if($ord->order_status==1)
                            Đơn đặt phòng mới
                            @elseif($ord->order_status==0)
                            Đã Hủy đơn đặt phòng
                            @elseif($ord->order_status==2)
                            Đơn đặt phòng xác nhận
                            @endif
                        </td>


                        <td>


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
                    </ul>
                </div>
            </div>
        </footer>

    </div>
</div>

@endsection