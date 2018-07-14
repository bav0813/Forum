<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Comments;
use DB;



class AdminController extends Controller
{
    public function index()
    {
        $users = User::orderBy ( 'created_at' , 'desc' )->get ();
        return view ( 'admin.dashboard.index' )->with ( 'users' , $users );
    }

    public function adminUsersGet()
    {
        $users = User::orderBy ( 'id' )->get ();

        return view ( 'admin.dashboard.users' )->with ( 'users' , $users );
    }

    public function renewusers(Request $request , $id , $status)
    {

        $user = User::find ( $id );

        $user->is_active = $status;
        $user->save ();


        return redirect ( '/admin/dashboard/users' );
    }


    public function adminComments()
    {
        //  $comments = Comments::orderBy('created_at', 'desc')->get();
        $comments = Comments::where ( 'is_active' , 0 )->orderBy ( 'created_at' , 'desc' )->paginate ( 10 );


        return view ( 'admin.dashboard.comments' )->with ( 'comments' , $comments );
    }

    public function adminCommentsAll()
    {
        $comments = Comments::orderBy ( 'created_at' , 'desc' )->paginate ( 10 );
        //$comments = Comments::where('is_active',0)->orderBy('created_at', 'desc')->get();


        return view ( 'admin.dashboard.comments_all' )->with ( 'comments' , $comments );
    }


    public function renewcomments(Request $request , $id , $status)
    {

        $comment = Comments::find ( $id );

        $comment->is_active = $status;
        $comment->save ();
        //   dd($comment);


        return redirect ( '/admin/dashboard/comments' );
    }


    public function editcomments(Request $request , $id , $msg)
    {

        $comment = Comments::find ( $id );

        $comment->comment = $msg;
        $comment->save ();
        //  dd($comment);


        return redirect ( '/admin/dashboard/comments_all' );
    }

    public function deletecomments(Request $request , $id)
    {

        $comment = Comments::find ( $id );

        //   $comment->comment=$msg;
        $comment->delete ();
        //  dd($comment);


        return redirect ( '/admin/dashboard/comments_all' );
    }


    public function getCategories()
    {
        $categories = Categories::paginate ( 10 );

        return view ( 'admin.dashboard.categories' )->with ( 'categories' , $categories );
    }

    public function addCategories(Request $request)
    {

        $this->validate ($request, [
            'description' => "required|string|min:1|max:1024",
            'description_en' => "required|string",
        ]);

        $newcat_descr = $request->description;
        $newcat_descr_en = $request->description_en;
        //dd ($newip);
        //Categories::insert();
        DB::table ( 'categories' )->insert ( ['description' => $newcat_descr , 'description_en' => $newcat_descr_en , 'is_active' => 1] );
        return back ();
    }


    public function renewcategory(Request $request , $id , $status)
    {

        $category = Categories::find ( $id ); //ORFAIL

        $category->is_active = $status;
        $category->save ();
        //   dd($comment);


        return redirect ( '/admin/dashboard/categories' );
    }

}