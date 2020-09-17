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
        $category = Category::find($id);dd($category);
        return response()->json([
            "message"=>"success",
            "data"=>[
                "category"=>$category->toArray(),
                "foods"=>$category->foods
            ]
        ]);
    }

    public function food(Food $food){
        return response()->json([
            "message"=>"success",
            "data"=>$food->toArray()
        ]);
    }
}
