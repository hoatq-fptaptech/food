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
            [
                "name"=>"Gà nướng - 9 miếng (Grilled Chicken - 9 Pcs)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/g/_/g_n_ng_2.png",
                "description"=>"",
                "price"=>310000,
                "category_id"=>2
            ],
            [
                "name"=>"Gà nướng - 6 miếng (Grilled Chicken - 6 Pcs)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/g/_/g_n_ng_2.png",
                "description"=>"",
                "price"=>207000,
                "category_id"=>2
            ],
            [
                "name"=>"Gà nướng - 3 miếng (Grilled Chicken - 3 Pcs)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/g/_/g_n_ng_s_t_hs_s_cay_3_6_9_mi_ng.jpg",
                "description"=>"",
                "price"=>107000,
                "category_id"=>2
            ],
            [
                "name"=>"Gà nướng - 1 miếng (Grilled Chicken - 1 PC)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/g/_/g_n_ng_1_mi_ng_s_t_hs_s_t_cay.jpg",
                "description"=>"",
                "price"=>38000,
                "category_id"=>2
            ],
            [
                "name"=>"Gà nướng góc tư (Chicken Quater Leg)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/g/_/g_g_c_t_.png",
                "description"=>"",
                "price"=>49000,
                "category_id"=>2
            ],
            [
                "name"=>"Gà Sốt Phô Mai - 1 miếng (Cheese Chicken - 1 PC)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/c/h/chicken_1_pc.jpg",
                "description"=>"",
                "price"=>38000,
                "category_id"=>2
            ],
            [
                "name"=>"Gà Sốt Đậu - 9 miếng (Soybean Chicken - 9 Pcs)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/g/a/ga_sot_dau_9_pcs_1.jpg",
                "description"=>"",
                "price"=>310000,
                "category_id"=>2
            ],
            [
                "name"=>"Súp Gà (Chicken Soup)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/s/o/soup_g__1.jpg",
                "description"=>"",
                "price"=>12000,
                "category_id"=>3
            ],
            [
                "name"=>"Cơm Gà Nướng (Grilled Chicken Rice)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/c/_/c_m_g_n_ng.png",
                "description"=>"",
                "price"=>45000,
                "category_id"=>3
            ],
            [
                "name"=>"Cơm Gà Sốt Đậu (Soybean Chicken Rice)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/s/o/soybeanchickenrice_4.png",
                "description"=>"",
                "price"=>45000,
                "category_id"=>3
            ],
            [
                "name"=>"Cơm Gà Viên (Chicken Ball Rice)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/c/h/chickenballrice_4.png",
                "description"=>"",
                "price"=>45000,
                "category_id"=>3
            ],
            [
                "name"=>"Cơm Thịt Bò Phô Mai (Beef Cheese Rice)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/z/2/z2054357287951_e157e816f01218490778bac846704d4d.jpg",
                "description"=>"",
                "price"=>45000,
                "category_id"=>3
            ],
            [
                "name"=>"Cơm Gà Nướng Góc Tư (Grilled Chicken Quater Leg Rice)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/c/_/c_m_g_n_ng_g_c_t_.png",
                "description"=>"",
                "price"=>58000,
                "category_id"=>3
            ],
            [
                "name"=>"Cơm Thịt Bò (Beef Rice)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/b/e/beef-rice_4.png",
                "description"=>"",
                "price"=>45000,
                "category_id"=>3
            ],
            [
                "name"=>"Pepsi không Calories vị chanh_dạng lon (Pepsi Zero",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/z/2/z2054228259338_f983ac7b886fccbe1772ccc551532ca2_1.jpg",
                "description"=>"",
                "price"=>18000,
                "category_id"=>4
            ],
            [
                "name"=>"Milo",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/m/i/milo.png",
                "description"=>"",
                "price"=>25000,
                "category_id"=>4
            ],
            [
                "name"=>"Mirinda (M)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/m/i/mirinda.jpg",
                "description"=>"",
                "price"=>14000,
                "category_id"=>4
            ],
            [
                "name"=>"Nước Cam (Orange Juice)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/o/r/orangejuice_4.png",
                "description"=>"",
                "price"=>28000,
                "category_id"=>4
            ],
            [
                "name"=>"Khoai Tây Chiên - M (French Fries -M)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/f/r/french-fries_4.png",
                "description"=>"",
                "price"=>25000,
                "category_id"=>5
            ],
            [
                "name"=>"Mì Ý (Spaghetti)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/m/_/m_th_t_b_m.jpg",
                "description"=>"",
                "price"=>29000,
                "category_id"=>5
            ],
            [
                "name"=>"Mì sốt kem gà viên (Scream Spaghetti)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/m/_/m_s_t_kem_g_vi_n.jpg",
                "description"=>"",
                "price"=>45000,
                "category_id"=>5
            ],
            [
                "name"=>"Gà xiên que - 1 xiên (Chicken Skewer - 1PC)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/g/_/g_xi_n_que.jpg",
                "description"=>"",
                "price"=>30000,
                "category_id"=>5
            ],
            [
                "name"=>"Cá Nugget - 5 miếng (Fish Nugget - 5 Pcs)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/c/_/c_nugget_1.jpg",
                "description"=>"",
                "price"=>35000,
                "category_id"=>5
            ],
            [
                "name"=>"Gà Lắc (Shake Chicken)",
                "image"=>"https://dscnnwjxnwl3f.cloudfront.net/media/catalog/product/cache/584039753b87a8d227764e04fc461e3e/s/h/shakechicken_4.png",
                "description"=>"",
                "price"=>45000,
                "category_id"=>5
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
