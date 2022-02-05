<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{




    public function show()
    {

        return view('category.category-show', [
            'categories' => Category::all()

        ]);
    }



    public function create()
    {

        return view('category.category-create');
    }



    public function store()
    {


        $attributes = request()->validate([

            'slug' => ['required', Rule::unique('categories', 'slug')],
            'name' => ['required', Rule::unique('categories', 'name')],
        ]);


        Category::create($attributes);

        session()->flash('success', 'Category created!!!');

        return redirect('/admin/category/dashboard');
    }


    public function destroy(Category $category)
    {

        $category->delete();

        session()->flash('success', 'Category deleted!!!');
        return redirect('/admin/category/dashboard');
    }
}
