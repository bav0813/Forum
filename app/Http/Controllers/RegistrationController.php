<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\User;

    class RegistrationController extends Controller
    {
        //

        public function create()
        {
            return view('registration.create');
        }

        public function store()
        {
            $this->validate (request (),[
                'name'=>'required',
                'email'=>'required|unique:users|email',
                'password'=>'required|confirmed'
            ]);


            //    $dashboard=User::create(request (['name','email','password']));


            $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'password' => bcrypt(request('password'))
            ]);

            auth()->login($user);

            return redirect('/');

        }



    }
