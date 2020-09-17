<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
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
        $data = [
            [
                "name"=>"Burger Bulgogi Phần (Bulgogi Burger Value)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/v/a/value_bulgogi_4.png",
                "description"=>"",
                "price"=>81000
            ],
            [
                "name"=>"Combo Burger Tôm (Shrimp Burger Combo)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/c/o/combo_shrimp_4.png",
                "description"=>"",
                "price"=>77000
            ],
            [
                "name"=>"Gà Rán Phần (Fried Chicken Set)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/p/r/product_transparent.png",
                "description"=>"",
                "price"=>83000
            ],
        ];
         return response()->json([
                    "message"=>"success",
                    "data"=>$data
                    ]);
    }
}
