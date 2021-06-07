<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function menu(){
       $data = Category::all()->toArray();
        return response()->json([
            "message"=>"success",
            "data"=> $data
        ]);
    }

    public function today(){
        if(!Cache::has("today_special")){
            $data = Food::inRandomOrder()->limit(6)->get()->toArray();
            $now = Carbon::now()->addHour();
            Cache::put("today_special",$data,$now);
        }
        $data = Cache::get("today_special");
         return response()->json([
                "message"=>"success",
                "data"=>$data
        ]);
    }

    public function category($id){
        $category = Category::findOrFail($id);
        return response()->json([
            "message"=>"success",
            "data"=>[
                "category"=>$category->toArray(),
                "foods"=>$category->foods
            ]
        ]);
    }

    public function food($id){
        $food = Food::findOrFail($id);
        return response()->json([
            "message"=>"success",
            "data"=>$food->toArray()
        ]);
    }

    public function addOrder(Request $request){
        $orderId = time();
        $data = $request->all();
        $data["id"]=$orderId;
        $orders = [];
        if(Cache::has("orders"))
            $orders = Cache::get("orders");
        $orders[$orderId] = $data;
        Cache::forever("orders",$orders);
        return response()->json(["message"=>"success","data"=>["order_id"=>$orderId]]);
    }

    public function orderDetail($id){
        $orders = [];
        return response()->json(["message"=>"fail","data"=>Cache::get("orders")]);
//        return Cache::get("orders")
        if(Cache::has("orders"))
            $orders = Cache::get("orders");
        if(isset($orders["id"])){
            return response()->json(["message"=>"success","data"=>$orders[$id]]);
        }
        return response()->json(["message"=>"fail","data"=>null]);
    }
}
