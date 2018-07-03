<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Comments;



class AdminController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.dashboard.index')->with('users', $users);
    }

    public function adminUsersGet()
    {
        $users = User::orderBy('id')->get();

        return view('admin.dashboard.users')->with('users',$users);
    }

    public function renewusers(Request $request,$id,$status)
    {

        $user = User::find($id);

        $user->is_active=$status;
        $user->save();



        return redirect ('/admin/dashboard/users');
    }


    public function adminComments()
    {
        //  $comments = Comments::orderBy('created_at', 'desc')->get();
        $comments = Comments::where('is_active',0)->orderBy('created_at', 'desc')->paginate (10);


        return view('admin.dashboard.comments')->with('comments',$comments);
    }

    public function adminCommentsAll()
    {
        $comments = Comments::orderBy('created_at', 'desc')->paginate (10);
        //$comments = Comments::where('is_active',0)->orderBy('created_at', 'desc')->get();


        return view('admin.dashboard.comments_all')->with('comments',$comments);
    }


    public function renewcomments(Request $request,$id,$status)
    {

        $comment = Comments::find($id);

        $comment->is_active=$status;
        $comment->save();
        //   dd($comment);



        return redirect ('/admin/dashboard/comments');
    }


    public function editcomments(Request $request,$id,$msg)
    {

        $comment = Comments::find($id);

        $comment->comment=$msg;
        $comment->save();
        //  dd($comment);



        return redirect ('/admin/dashboard/comments_all');
    }


}
