<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Slider;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Excel;
use CategoryRoomModel;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
class HomeController extends Controller
{
    public function index()
    {

        //--seo

    	$cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get();




        $all_room = DB::table('tbl_room')->where('room_status','0')->orderby(DB::raw('RAND()'))->paginate(6);

    	return view('page.home')->with('category',$cate_room)->with('all_room',$all_room);
    }
    public function search(Request $request){
        //slide
      

       //seo 
       $meta_desc = "Tìm kiếm phòng"; 
       $meta_keywords = "Tìm kiếm phòng";
       $meta_title = "Tìm kiếm phòng";
       $url_canonical = $request->url();
       //--seo
       $checkin_search=$request ->checkin_search;
       $checkout_search=$request ->checkout_search;
    

       $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get(); 

      // Retrieve records from tbl_order_details within the specified checkin range
      $search = DB::table('tbl_order_details')
      ->where(function ($query) use ($checkin_search, $checkout_search) {
          $query->where(function ($query) use ($checkin_search, $checkout_search) {
                  $query->whereBetween('checkin', [$checkin_search, $checkout_search])
                        ->orWhereBetween('checkout', [$checkin_search, $checkout_search]);
              })
              ->orWhere(function ($query) use ($checkin_search, $checkout_search) {
                  $query->where('checkin', '<', $checkin_search)
                        ->Where('checkout', '>', $checkout_search);
              });
      })
      ->get();
  

// Extract room_id values from the $search_room result
$room_ids = $search->pluck('room_id')->toArray();

// Retrieve records from tbl_room where room_id is not in $room_ids
$search_room = DB::table('tbl_room')
->whereNotIn('room_id', $room_ids)
->get();


       return view('page.room.search')->with('category',$cate_room)->with('search_room',$search_room)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

   }
   
   
   public function search_price(Request $request){
    $priceSearch = $request->input('price_search');

    // Xử lý giá trị ở đây (ví dụ: in ra giá trị)
    list($minValue, $maxValue) = explode(',', $priceSearch);
$minValue=floatval($minValue);
$maxValue=floatval($maxValue);

   //seo 
   $meta_desc = "Tìm kiếm phòng"; 
   $meta_keywords = "Tìm kiếm phòng";
   $meta_title = "Tìm kiếm phòng";
   $url_canonical = $request->url();
   
  
    // Xử lý lỗi ở đây, có thể redirect người dùng hoặc hiển thị thông báo lỗi


   $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get(); 
   $search_room = DB::table('tbl_room')->whereBetween('room_price',[$minValue, $maxValue])->get(); 
  // Retrieve records from tbl_order_details within the specified checkin range
   

// Extract room_id values from the $search_room result


// Retrieve records from tbl_room where room_id is not in $room_ids



   return view('page.room.search')->with('category',$cate_room)->with('search_room',$search_room)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

}
}