<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Social; // Assuming your model namespace is App\Models
use Socialite;
use App\Models\Login; // Assuming your model namespace is App\Models
use App\Http\Requests; // Make sure you have the appropriate namespace for Requests
use Illuminate\Support\Facades\Redirect;
use Validator;
use App\Http\Controllers\Captcha; // Assuming your Captcha rule is in the App\Rules namespace

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        //$data = $request->all();


        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $resuft = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if ($resuft) {

            Session::put('admin_name', $resuft->admin_name);
            Session::put('admin_id', $resuft->admin_id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Mật khẩu hoặc tài khoản bị sai.Vui lòng nhập lại');
            return Redirect::to('/admin_login');
        }
    }
    public function logout()
    {

        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin_login');
    }
}
