<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\City;
use App\Province;
use App\Wards;
use App\Feeship;
use App\booking;
use App\Order;
use App\OrderDetails;

class OrderController extends Controller
{
	public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
	public function manage_order(){
			
		$this->AuthLogin();
		$all_order = DB::table('tbl_order')
		->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
		->select('tbl_order.*','tbl_customers.customer_name')
		->orderby('tbl_order.order_id','desc')->get();
		$manager_order  = view('admin.manage_order')->with('all_order',$all_order);
		return view('admin_layout')->with('admin.manage_order', $manager_order);
	}
	public function view_order($orderId){
        $this->AuthLogin();
        $order_by_id = DB::table('tbl_order')->where('tbl_order.order_id', $orderId)
        ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
        ->join('tbl_booking','tbl_order.booking_id','=','tbl_booking.booking_id')
        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id') ->select('tbl_order.*','tbl_customers.*','tbl_booking.*','tbl_order_details.*')->first();
        $manager_order_by_id  = view('admin.view_order')->with('order_by_id',$order_by_id);
        return view('admin_layout')->with('admin.view_order', $manager_order_by_id);
        
    }
}
