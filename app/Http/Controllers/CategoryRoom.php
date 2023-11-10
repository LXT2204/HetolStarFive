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
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin_login')->send();
        }
    }
    public function add_category_room()
    { $this->AuthLogin();

        return view('admin.add_category_room');
    }
    public function all_category_room()
    {$this->AuthLogin();
        $all_category_room = DB::table('tbl_category_room')->get();
        $manager_category_room  = view('admin.all_category_room')->with('all_category_room', $all_category_room);
        return view('admin_layout')->with('admin.all_category_room', $manager_category_room);
    }
    public function save_category_room(Request $request)
    {$this->AuthLogin();

        $data = array();

        $data['category_name'] = $request->category_room_name;
        $data['category_desc'] = $request->category_room_desc;
        $data['category_status'] = $request->category_room_status;

        DB::table('tbl_category_room')->insert($data);
        Session::put('message', 'Thêm loại phòng thành công');
        return Redirect::to('add-category-room');
    }
    public function unactive_category_room($category_room_id)
    {$this->AuthLogin();

        DB::table('tbl_category_room')->where('category_id', $category_room_id)->update(['category_status' => 1]);
        Session::put('message', 'Không kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-room');
    }
    public function active_category_room($category_room_id)
    {$this->AuthLogin();

        DB::table('tbl_category_room')->where('category_id', $category_room_id)->update(['category_status' => 0]);
        Session::put('message', 'Kích hoạt danh mục sản phẩm thành công');
        return Redirect::to('all-category-room');
    }
    public function edit_category_room($category_room_id)
    {$this->AuthLogin();
        $edit_category_room = DB::table('tbl_category_room')->where('category_id', $category_room_id)->get();

        $manager_category_room  = view('admin.edit_category_room')->with('edit_category_room', $edit_category_room);

        return view('admin_layout')->with('admin.edit_category_room', $manager_category_room);
    }
    public function update_category_room(Request $request, $category_room_id)
    {$this->AuthLogin();
        $data = array();
        $data['category_name'] = $request->category_room_name;

        $data['category_desc'] = $request->category_room_desc;
        DB::table('tbl_category_room')->where('category_id', $category_room_id)->update($data);
        Session::put('message', 'Cập nhật danh mục phòng thành công');
        return Redirect::to('all-category-room');
    }
    public function delete_category_room($category_room_id)
    {$this->AuthLogin();
        DB::table('tbl_category_room')->where('category_id', $category_room_id)->delete();
        Session::put('message', 'Xóa danh mục phòng thành công');
        return Redirect::to('all-category-room');
    }
    public function show_category_home($category_id){


         $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get();

         $category_by_id = DB::table('tbl_room')->join('tbl_category_room','tbl_room.category_id','=','tbl_category_room.category_id')->where('tbl_room.category_id',$category_id)->paginate(6);



         $category_name = DB::table('tbl_category_room')->where('tbl_category_room.category_id',$category_id)->limit(1)->get();
         foreach($category_name as $key => $val){
                 //seo
                 $meta_desc = $val->category_desc;
                 $meta_title = $val->category_name;

                 //--seo
                 }


         return view('page.category.show_category')->with('category',$cate_room)->with('category_by_id',$category_by_id)->with('category_name',$category_name)->with('meta_desc',$meta_desc);
     }

    //End Function Admin Page

}