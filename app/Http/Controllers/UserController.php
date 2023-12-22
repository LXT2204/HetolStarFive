<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Slider;
use App\Exports\ExcelExports;
use App\Imports\ExcelImports;
use Excel;
use userRoomModel;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();
class UserController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin_login')->send();
        }
    }
    public function add_users()
    { $this->AuthLogin();
    
        return view('admin.add_user');
    }
    public function save_user(Request $request)
    {$this->AuthLogin();

        $data = array();
        $data['customer_name'] = $request->user_name;
        $data['customer_phone'] = $request->user_phone;
        $data['customer_email'] = $request->user_email;
        $data['customer_password'] = md5($request->user_password);
        $data['customer_address'] = $request->user_address;
    if( empty($data['customer_name'])||empty($data['customer_phone'])|| empty($data['customer_email'])||empty($data['customer_password'])||empty($data['customer_address']))
    { Session::put('message', 'Vui lòng điền đủ thông tin');
        return Redirect::to('add-users');}
       else{ $customer_id = DB::table('tbl_customers')->insertGetId($data);
    
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->user_name);
        Session::put('message', 'Thêm user thành công');

        return Redirect::to('add-users');

    }
    }
    public function all_user()
    {$this->AuthLogin();
        $all_user = DB::table('tbl_customers')->get();
        $manager_user  = view('admin.all_user')->with('all_user', $all_user);
        return view('admin_layout')->with('admin.all_user', $manager_user);
    }
    public function edit_user($customer_id)
    {$this->AuthLogin();
        $edit_customer = DB::table('tbl_customers')->where('customer_id', $customer_id)->get();

        $manager_edit_user  = view('admin.edit_user')->with('edit_customer', $edit_customer);

        return view('admin_layout')->with('admin.edit_user', $manager_edit_user);
    }
    public function update_user(Request $request, $customer_id)
    {$this->AuthLogin();
        $data = array();
        $data['customer_name'] = $request->user_name;
        $data['customer_phone'] = $request->user_phone;
        $data['customer_email'] = $request->user_email;
        $data['customer_password'] = md5($request->user_password);
        $data['customer_address'] = $request->user_address;
        DB::table('tbl_customers')->where('customer_id', $customer_id)->update($data);
        Session::put('message', 'Cập nhật user thành công');
        return Redirect::to('users');

    }
    public function delete_user($customer_id)
    {$this->AuthLogin();
        DB::table('tbl_customers')->where('customer_id', $customer_id)->delete();
        Session::put('message', 'Xóa user thành công');
        return Redirect::to('users');
    }
}
