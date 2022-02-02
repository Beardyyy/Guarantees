<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{




    public function show()
    {

        return view('category.category-show', [
            'categories' => Category::all()

        ]);
    }
}
