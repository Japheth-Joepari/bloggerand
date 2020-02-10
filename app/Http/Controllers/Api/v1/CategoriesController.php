<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    function categorieslist(){
        $categories = Category::all();
        return response()->json([
          "status" => 200,
          "categories" => $categories
        ]);

    }
}
