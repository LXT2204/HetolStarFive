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
public function order_place(Request $request){
   
    //insert payment_method
    //seo 
    $meta_desc = "Đăng nhập thanh toán"; 
    $meta_keywords = "Đăng nhập thanh toán";
    $meta_title = "Đăng nhập thanh toán";
    $url_canonical = $request->url();
    //--seo 
    $data = array();
    $data['payment_method'] = $request->payment_option;
    $data['payment_status'] = '1';
    $payment_id = DB::table('tbl_payment')->insertGetId($data);

    //insert order
    $order_data = array();
    $order_data['customer_id'] = Session::get('customer_id');
    $order_data['booking_id'] = Session::get('booking_id');
    $order_data['payment_id'] = $payment_id;
    $order_data['order_total'] = Cart::total();
    $order_data['order_status'] = '1';
    $order_id = DB::table('tbl_order')->insertGetId($order_data);

    //insert order_details
    $content = Cart::content();
    foreach($content as $v_content){
        $order_d_data['order_id'] = $order_id;
        $order_d_data['room_id'] = $v_content->id;
        $order_d_data['room_name'] = $v_content->name;
        $order_d_data['room_price'] = $v_content->price;
        $order_d_data['checkin'] = $v_content->options->qty_checkin;
        $order_d_data['checkout'] = $v_content->options->qty_checkout;

        DB::table('tbl_order_details')->insert($order_d_data);
    }
    if($data['payment_method']==1){
        Cart::destroy();

        echo 'Thanh toán thẻ ATM';

    }elseif($data['payment_method']==2){
        Cart::destroy();

        $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get();
       
        return view('page.checkout.handcash')->with('category',$cate_room)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

    }else{
        Cart::destroy();

        echo 'Thẻ ghi nợ';

    }
    
    // // return Redirect::to('/payment');
}
public function show_cart($customerId){
    $all_order = DB::table('tbl_order')->where('tbl_order.customer_id', $customerId)
    ->join('tbl_customers','tbl_order.customer_id','=','tbl_customers.customer_id')
    ->select('tbl_order.*','tbl_customers.customer_name')
    ->orderby('tbl_order.order_id','desc')->get();
    $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get(); 

    
    return view('page.user.user_order')->with('all_order',$all_order)->with('category',$cate_room);
    
}
public function edit_customer($customerId){

        $edit_user = DB::table('tbl_customers')->where('customer_id', $customerId)->get();
        $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get(); 

        return view('page.user.user_edit')->with('edit_user',$edit_user)->with('category',$cate_room);


}
public function update_user(Request $request, $customer_id)
    {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = md5($request->customer_password);
        $data['customer_address'] = $request->customer_address;
        DB::table('tbl_customers')->where('customer_id', $customer_id)->update($data);
        Session::put('message', 'Cập nhật user thành công');
        return Redirect::to('');

    }
}