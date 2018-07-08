<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\BanIpController;

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

        $this->middleware ( 'auth' )->except ( 'storepost' );

    }


    public function storepost($category , $id)
    {

        //test
        if (!Auth::check ()) {
            $user = User::whereName ( "Anonymous" )->firstOrFail ();


        } else {
            $user = Auth ()->user ();


        }

        if ($user->name == 'Anonymous') {
            $is_active = 0;
        } else
            $is_active = 1;

        //  dd($user);
        $ip = $_SERVER['REMOTE_ADDR'];
        $status = BanIpController::is_banned ( $ip );
        if (!$status) {

        Comments::create ( ['comment' => htmlspecialchars ( request ( 'comment_body' ) ) , 'topic_id' => $id , 'is_active' => $is_active , // 'user_id'=>auth()->user()->id
            'user_id' => $user->id , 'ip' => $ip


        ] );

        return back ();

        } else {
            $error = 'user is banned';
            return back ()->with ( ['errors' => $error] );
        }

    }


    public function createtopic($category)
    {

        $ip = $_SERVER['REMOTE_ADDR'];


//        if (!Auth::check()) {
//                redirect('/login');
//            }

        $status = BanIpController::is_banned ( $ip );
        //       dd($status);

        if (!$status) {

            $cat = DB::table ( 'categories' )->where ( 'description_en' , $category )->first ();
//dd($cat);
            Topics::create ( ['description' => htmlspecialchars ( request ( 'topicname' ) ) , 'category' => $cat->id , 'is_active' => '1' , 'user_id' => auth ()->user ()->id//  'user_id'=>$user->id


            ] );
            return back ();
        } else {
            $error = 'user is banned';
            return back ()->with ( ['errors' => $error] );
        }
    }

    public function createTopicSchools($school_id)
    {
//dd ($school_id);

        $ip = $_SERVER['REMOTE_ADDR'];
        $status = BanIpController::is_banned ( $ip );

        if (!$status) {


            Topics::create ( ['description' => htmlspecialchars ( request ( 'topicname' ) ) , 'category' => 1 , 'subcategory' => $school_id , 'is_active' => '1' , 'user_id' => auth ()->user ()->id


            ] );
            return back ();

        } else {
            $error = 'user is banned';
            return back ()->with ( ['errors' => $error] );
        }


    }

}
