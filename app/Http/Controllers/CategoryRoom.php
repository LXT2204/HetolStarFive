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

session_start();

class CategoryRoom extends Controller
{

    public function add_category_room()
    {

        return view('admin.add_category_room');
    }
    public function all_category_room()
    {
        $all_category_room = DB::table('tbl_category_room')->get();
        $manager_category_room  = view('admin.all_category_room')->with('all_category_room', $all_category_room);
        return view('admin_layout')->with('admin.all_category_room', $manager_category_room);
    }
    public function save_category_room(Request $request)
    {

        $data = array();

        $data['category_name'] = $request->category_room_name;
        $data['category_desc'] = $request->category_room_desc;
        $data['category_status'] = $request->category_room_status;

        DB::table('tbl_category_room')->insert($data);
        Session::put('message', 'Thêm loại phòng thành công');
        return Redirect::to('add-category-room');
    }
    public function unactive_category_room($category_room_id)
    {

        DB::table('tbl_category_room')->where('category_id', $category_room_id)->update(['category_status' => 1]);
        Session::put('message', 'Không kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-room');
    }
    public function active_category_room($category_room_id)
    {

        DB::table('tbl_category_room')->where('category_id', $category_room_id)->update(['category_status' => 0]);
        Session::put('message', 'Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-room');
    }
    public function edit_category_room($category_room_id)
    {
        $edit_category_room = DB::table('tbl_category_room')->where('category_id', $category_room_id)->get();

        $manager_category_room  = view('admin.edit_category_room')->with('edit_category_room', $edit_category_room);

        return view('admin_layout')->with('admin.edit_category_room', $manager_category_room);
    }
    public function update_category_room(Request $request, $category_room_id)
    {
        $data = array();
        $data['category_name'] = $request->category_room_name;
        $data['meta_keywords'] = $request->category_room_keywords;
        $data['slug_category_room'] = $request->slug_category_room;
        $data['category_desc'] = $request->category_room_desc;
        DB::table('tbl_category_room')->where('category_id', $category_room_id)->update($data);
        Session::put('message', 'Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-room');
    }
    public function delete_category_room($category_room_id)
    {
        DB::table('tbl_category_room')->where('category_id', $category_room_id)->delete();
        Session::put('message', 'Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-room');
    }


    //End Function Admin Page

}
