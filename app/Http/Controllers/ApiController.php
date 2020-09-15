<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function menu(){
        return response()->json([
            "message"=>"success",
            "data"=>[
                [
                    "id"=>1,
                    "icon"=>"https://www.lotteria.vn/media/catalog/tmp/category/cate-9_1.jpg",
                    "name"=>"Burger"
                ],
                [
                    "id"=>2,
                    "icon"=>"https://www.lotteria.vn/media/catalog/tmp/category/cate-2.jpg",
                    "name"=>"Chicken"
                ],
                [
                    "id"=>3,
                    "icon"=>"https://www.lotteria.vn/media/catalog/tmp/category/cate-7.jpg",
                    "name"=>"Rice"
                ],
                [
                    "id"=>4,
                    "icon"=>"https://www.lotteria.vn/media/catalog/tmp/category/cate-6.jpg",
                    "name"=>"Drinks"
                ],
                [
                    "id"=>5,
                    "icon"=>"https://www.lotteria.vn/media/catalog/tmp/category/cate-8.jpg",
                    "name"=>"Dessert"
                ],
            ]
        ]);
    }

    public function today(){
         return response()->json([
                    "message"=>"success",
                    "data"=>[
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
                    ]
                    ]);
    }
}
