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

class HomeController extends Controller
{
    public function index()
    {

        //--seo

    	$cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get();




        $all_room = DB::table('tbl_room')->where('room_status','0')->orderby(DB::raw('RAND()'))->paginate(6);

    	return view('page.home')->with('category',$cate_room)->with('all_room',$all_room);
    }
}