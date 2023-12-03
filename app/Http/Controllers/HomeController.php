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
       $meta_desc = "Tìm kiếm sản phẩm"; 
       $meta_keywords = "Tìm kiếm sản phẩm";
       $meta_title = "Tìm kiếm sản phẩm";
       $url_canonical = $request->url();
       //--seo
       $checkin_search=$request ->checkin_search;
       $checkout_search=$request ->checkout_search;
       $content = Cart::Content()->where('');
    
              $keywords = $request->keywords_submit;

       $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get(); 

       $search_room = DB::table('tbl_room')->where('room_name','like','%'.$keywords.'%')->get(); 


       return view('page.room.search')->with('category',$cate_room)->with('search_room',$search_room)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical);

   }
}