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
class CartController extends Controller
{


    public function save_cart(Request $request){
        $roomId = $request->roomid_hidden;

        $room_info = DB::table('tbl_room')->where('room_id',$roomId)->first();


        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        $data['id'] = $room_info->room_id;
        $data['name'] = $room_info->room_name;
        $data['price'] = $room_info->room_price;
        $data['weight'] = $room_info->room_price;
        $data['options']['image'] = $room_info->room_image;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/show-cart');
     //Cart::destroy();

    }


}
