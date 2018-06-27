<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
//    public function __construct()
//    {
//        //      $this->middleware('auth')->only('store'); //works
//
//        $this->middleware('auth')->except ('store','search');
//
//    }
//
//
//
//    public function store($category,$pageID)
//    {
//
//        //test
//        if (!Auth::check()){
//            $user=\App\User::whereName("Anonymous")->firstOrFail();
//
//
//        }
//        else {
//            $user = Auth()->user();
//
//
//        }
//
//        if ($category=='politics') {
//            $is_active=0;
//        }
//        else
//            $is_active=1;
//
//        Comments::create([
//            'comment'=>request ('comment_body'),
//            'news_id'=>$pageID,
//            'is_active'=>$is_active,
//            // 'user_id'=>auth()->user()->id
//            'user_id'=>$user->id
//
//
//
//        ]);
//
//
//
//        return back ();
//    }
}
