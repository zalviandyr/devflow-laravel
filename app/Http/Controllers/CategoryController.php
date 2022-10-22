<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CreateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function all()
    {
        $category = Category::all();
        return response()->json($category);
    }

    public function create(CreateRequest $request)
    {
        $category = Category::create($request);
        return response()->json($category);
    }


}
