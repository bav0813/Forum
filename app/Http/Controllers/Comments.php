<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\School;

class Comments extends Controller
{
    public function index(){
        $school = School::skip(0)->take(5)->get();
        return view('main')->with('school', $school);
    }

    public function subsection(){
        $school = School::paginate(5);
        return view('subsection')->with('school', $school);
    }
    public function about(){
        return view('about');
    }
    public function topic(){
        return view('topic');
    }
}
