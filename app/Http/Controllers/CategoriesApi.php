<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesApi extends Controller
{
    function categorylist (){
        $categories = Category::all();
        return response()->json([
            "status" => 200,
            "categories" => $categories[0]->created_at
        ]);
    }
}
