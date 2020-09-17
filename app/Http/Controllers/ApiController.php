<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
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
                "name"=>"Hawaii Burger",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/h/a/hawaii_burger_1_2.jpg",
                "description"=>"",
                "price"=>60000,
                "category_id"=>1
            ],
            [
                "name"=>"Super Jumbo Burger",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/j/u/jumbo-chicken-burger_4.jpg",
                "description"=>"",
                "price"=>60000,
                "category_id"=>1
            ],
            [
                "name"=>"Big Star Burger",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/b/u/burger_bigstar_4.png",
                "description"=>"",
                "price"=>56000,
                "category_id"=>1
            ],
            [
                "name"=>"Burger Gà Thượng Hạng (Premium Chicken Burger)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/b/u/burger_premium-chicken_4.png",
                "description"=>"",
                "price"=>44000,
                "category_id"=>1
            ],
            [
                "name"=>"Burger Cá (Fish Burger)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/b/u/burger_fish_5.png",
                "description"=>"",
                "price"=>34000,
                "category_id"=>1
            ],
            [
                "name"=>"Burger Tôm (Shrimp Burger)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/b/u/burger_shrimp_4.png",
                "description"=>"",
                "price"=>47000,
                "category_id"=>1
            ],
            [
                "name"=>"Mozzarella Burger",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/m/o/mozzarella-burger_5.jpg",
                "description"=>"",
                "price"=>60000,
                "category_id"=>1
            ],
            [
                "name"=>"Burger Bò Teriyaki (Teriyaki Burger)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/t/e/teriyaki-burger_4.png",
                "description"=>"",
                "price"=>31000,
                "category_id"=>1
            ],

        ];
        foreach ($data as $item)
            Food::create($item);
        die("done");
         return response()->json([
                    "message"=>"success",
                    "data"=>$data
                    ]);
    }
}
