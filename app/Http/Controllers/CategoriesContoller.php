<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subcategories;
use App\Categories;

class CategoriesContoller extends Controller
{
    public function index(){
        $school = Subcategories::skip(0)->take(5)->get();
        return view('main')->with('school', $school);
    }

    public function subsection(){
        $school = Subcategories::paginate(5);

        return view('subsection')->with('school', $school);
    }
    public function about(){
        return view('about');
    }
    public function topic(){
        return view('topic');
    }

    public function getAllCategories()
    {
        $categories=CategoriesContoller::get();
        return view('main')->with(['categories'=>$categories]);
    }
}
