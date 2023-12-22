<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Slider;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Excel;
use CategoryRoomModel;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();
class RoomController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin_login')->send();
        }
    }
    public function add_room(){
        $this->AuthLogin();
        $cate_room = DB::table('tbl_category_room')->orderby('category_id','desc')->get();


        return view('admin.add_room')->with('cate_room', $cate_room);


    }
    public function all_room(){
        $this->AuthLogin();
    	$all_room = DB::table('tbl_room')
        ->join('tbl_category_room','tbl_category_room.category_id','=','tbl_room.category_id')

        ->orderby('tbl_room.room_id','desc')->paginate(5);
    	$manager_room  = view('admin.all_room')->with('all_room',$all_room);
    	return view('admin_layout')->with('admin.all_room', $manager_room);

    }
    public function save_room(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['room_name'] = $request->room_name;

    	$data['room_price'] = $request->room_price;
    	$data['room_desc'] = $request->room_desc;
        $data['room_content'] = $request->room_content;
        $data['category_id'] = $request->room_cate;

        $data['room_status'] = $request->room_status;
        $get_image = $request->file('room_image');

        if($get_image&&$data['room_name']&&$data['room_price']&&$data['room_desc']&&$data['room_content']&&$data['category_id']&& $data['room_status']){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/room',$new_image);
            $data['room_image'] = $new_image;
            DB::table('tbl_room')->insert($data);
            Session::put('message','Thêm phòng thành công');
            return Redirect::to('add-room');
        }else{
       
    	
    	Session::put('message','Điền đầy đủ thông tin mô tả phòng');
    	return Redirect::to('add-room');}
    }
    public function unactive_room($room_id){
        $this->AuthLogin();
        DB::table('tbl_room')->where('room_id',$room_id)->update(['room_status'=>1]);
        Session::put('message','Không kích hoạt phòng thành công');
        return Redirect::to('all-room');

    }
    public function active_room($room_id){
        $this->AuthLogin();
        DB::table('tbl_room')->where('room_id',$room_id)->update(['room_status'=>0]);
        Session::put('message','Kích hoạt phòng thành công');
        return Redirect::to('all-room');
    }
    public function edit_room($room_id){$this->AuthLogin();
        $cate_room = DB::table('tbl_category_room')->orderby('category_id','desc')->get();


        $edit_room = DB::table('tbl_room')->where('room_id',$room_id)->get();

        $manager_room  = view('admin.edit_room')->with('edit_room',$edit_room)->with('cate_room',$cate_room);

        return view('admin_layout')->with('admin.edit_room', $manager_room);
    }
    public function update_room(Request $request,$room_id){
        $this->AuthLogin();

        $data = array();
        $data['room_name'] = $request->room_name;

        $data['room_price'] = $request->room_price;
        $data['room_desc'] = $request->room_desc;
        $data['room_content'] = $request->room_content;
        $data['category_id'] = $request->room_cate;

        $data['room_status'] = $request->room_status;
        $get_image = $request->file('room_image');
                if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/room',$new_image);
            $data['room_image'] = $new_image;
            DB::table('tbl_room')->where('room_id',$room_id)->update($data);
            Session::put('message', 'update room successfully!');
            return Redirect::to('all-room');
        }
        else{           $old_room=  DB::table('tbl_room')->where('room_id',$room_id)->get();
foreach($old_room as $key=>$value){
            $data['room_image'] = $value->room_image;}
            DB::table('tbl_room')->where('room_id',$room_id)->update($data);
            Session::put('message', 'update room successfully!');
            return Redirect::to('all-room');

        }
        

    }
    public function delete_room($room_id){$this->AuthLogin();
        $this->AuthLogin();

        DB::table('tbl_room')->where('room_id',$room_id)->delete();
        Session::put('message','Xóa phòng thành công');
        return Redirect::to('all-room');
    }
    public function details_room($room_id , Request $request){
        //slide


       $cate_room = DB::table('tbl_category_room')->where('category_status','0')->orderby('category_id','desc')->get();

       $details_room = DB::table('tbl_room')
       ->join('tbl_category_room','tbl_category_room.category_id','=','tbl_room.category_id')->where('tbl_room.room_id',$room_id)
      ->get();

       foreach($details_room as $key => $value){
           $category_id = $value->category_id;
               //seo
               $meta_desc = $value->room_desc;

               $meta_title = $value->room_name;
               $url_canonical = $request->url();
               //--seo
           }

       $related_room = DB::table('tbl_room')
       ->join('tbl_category_room','tbl_category_room.category_id','=','tbl_room.category_id')
       ->where('tbl_category_room.category_id',$category_id)->whereNotIn('tbl_room.room_id',[$room_id])->orderby(DB::raw('RAND()'))->paginate(3);


       return view('page.room.show_details')->with('category',$cate_room)->with('room_details',$details_room)->with('meta_desc',$meta_desc)->with('relate',$related_room);

   }
    //End Admin Page

}