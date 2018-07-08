<?php

namespace App\Http\Controllers;
use App;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function __construct()
    {

        $this->middleware ( 'auth' );

    }


    public function getprofile()
    {
        $id = $user = Auth ()->user ()->id;
        $users = App\User::where ( 'id' , $id )->first ();
        return view ( 'users.profile' )->with ( ['users' => $users] );


    }

    public function storeAvatar(Request $request)
    {
        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile ( 'input_img' )) {
            $image = $request->file ( 'input_img' );
            $name = 'profile-photo-' . time() . '.' . $image->getClientOriginalExtension();
//            $name = $image->getClientOriginalName ();
            $destinationPath = public_path ( 'images' );
            $image->move ( $destinationPath , $name );


            $user_id = Auth()->id();
            DB::table('users')
                ->where('id',$user_id)
                ->update(['avatar'=>$name]);
//


            //  $path = $image->storeAs($destinationPath, $name);
            //  dd($path);


            return back ();


        }
    }
}
