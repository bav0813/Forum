<?php

    namespace App\Http\Controllers\Auth;

    use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Auth; //added
    use Illuminate\Validation\Rule;

    use App\Http\Controllers\Controller;
    use Illuminate\Foundation\Auth\AuthenticatesUsers;

    class LoginController extends Controller
    {


        use AuthenticatesUsers;

        /**
         * Where to redirect users after login.
         *
         * @var string
         */
        protected $redirectTo = '/';


        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware ( 'guest' )->except ( 'logout' );


        }
        protected function validateLogin(Request $request)
        {
            $this->validate ( $request ,
                [$this->username () => ['required' , Rule::exists ( 'users' )->where ( function ($query) {
                $query->where ( 'is_active' , '1' );
            } ) ,] , 'password' => 'required' ,] );

        }




    }
