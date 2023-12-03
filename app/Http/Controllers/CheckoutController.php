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
use App\Shipping;
use App\Order;
use App\OrderDetails;

class CheckoutController extends Controller
{
    public function login_checkout(){
        $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get();

    return view('page.checkout.login_checkout')->with('category',$cate_room);
   }
   public function add_customer(Request $request){

    $data = array();
    $data['customer_name'] = $request->customer_name;
    $data['customer_phone'] = $request->customer_phone;
    $data['customer_email'] = $request->customer_email;
    $data['customer_password'] = md5($request->customer_password);
    $data['customer_address'] = $request->customer_address;

    $customer_id = DB::table('tbl_customers')->insertGetId($data);

    Session::put('customer_id',$customer_id);
    Session::put('customer_name',$request->customer_name);
    return Redirect::to('/checkout');


}
public function checkout(){
    $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get();

    return view('page.checkout.show_checkout')->with('category',$cate_room);
}
public function save_checkout_customer(Request $request){
    $data = array();
    $data['booking_name'] = $request->booking_name;
    $data['booking_phone'] = $request->booking_phone;
    $data['booking_email'] = $request->booking_email;
    $data['booking_notes'] = $request->booking_notes;
    $data['booking_address'] = $request->booking_address;

    $booking_id = DB::table('tbl_booking')->insertGetId($data);

    Session::put('booking_id',$booking_id);
    
    return Redirect::to('/payment');
}
public function payment(Request $request){
    //seo 
    $meta_desc = "Đăng nhập thanh toán"; 
    $meta_keywords = "Đăng nhập thanh toán";
    $meta_title = "Đăng nhập thanh toán";
    $url_canonical = $request->url();
    //--seo 
    $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get();
    return view('page.checkout.payment')->with('category',$cate_room)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

}
public function logout_checkout(){
    Session::forget('customer_id');
    return Redirect::to('/login-checkout');
}
public function login_customer(Request $request){
    $email = $request->email_account;
    $password = md5($request->password_account);
    $result = DB::table('tbl_customers')->where('customer_email',$email)->where('customer_password',$password)->first();
    
    
    if($result){
       
        Session::put('customer_id',$result->customer_id);
        return Redirect::to('/checkout');
    }else{
        return Redirect::to('/login-checkout');
    }
    Session::save();

}
}
