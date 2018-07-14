<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function rules(){
        return view ('rules');
    }

    public function help(){
        return view ('help');
    }
}
