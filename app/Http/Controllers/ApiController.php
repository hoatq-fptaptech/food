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
        $data = Food::inRandomOrder()->limit(6)->get()->toArray();
         return response()->json([
                    "message"=>"success",
                    "data"=>$data
                    ]);
    }
}
