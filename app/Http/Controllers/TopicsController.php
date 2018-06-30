<?php

namespace App\Http\Controllers;
//use DB;
use Illuminate\Support\Facades\DB;

use App\User;
use Illuminate\Http\Request;
use App\Comments;
use App\Topics;

use Illuminate\Support\Facades\Auth;



class TopicsController extends Controller
{
    public function __construct()
    {
        //      $this->middleware('auth')->only('store'); //works

        $this->middleware('auth')->except ('storepost','search');

    }





    public function storepost($category,$id)
    {

        //test
        if (!Auth::check()){
            $user=User::whereName("Anonymous")->firstOrFail();


        }
        else {
            $user = Auth()->user();


        }

        if ($category=='politics') {
            $is_active=0;
        }
        else
            $is_active=1;

        Comments::create([
            'comment'=>request ('comment_body'),
            'topic_id'=>$id,
            'is_active'=>$is_active,
            // 'user_id'=>auth()->user()->id
            'user_id'=>$user->id



        ]);



        return  back();
    }


    public function createtopic($category)
    {


            $cat = DB::table ( 'categories' )->where ( 'description_en' , $category )->first ();
//dd($cat);
            Topics::create ( [
                'description' => request ( 'topicname' ),
                'category' => $cat->id ,
                'is_active' => '1' ,
                'user_id' => auth ()->user ()->id
                //  'user_id'=>$user->id


            ] );
            return back ();
        }


}
