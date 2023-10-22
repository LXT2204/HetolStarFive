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


class CategoryRoom extends Controller
{
    public function add_category_room()
    {
        return view('admin.add_category_room');
    }
    public function all_category_room()
    {
        return view('admin.all_category_room');
    }
}
