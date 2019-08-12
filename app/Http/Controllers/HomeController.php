<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('AdminHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }

    // public function GetCate()
    // {
    //     $view = view("pages.category.cate")->render();
    //     dd($view);
    //     return $view;
    // }

    public function postSignin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $sign = array(
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            //'password' => Input::get('password'),
            // 'status' => 'Active'
        );
        // dd(email);

        if (Auth::attempt($sign)) {
            //return "ok.";
            return redirect()->action("HomeController@AdminHome");
        } else {
            //return "Wrong.";
            return redirect('/admin')->with('fails', 'Username/password  not correct, You may also contact Admin to Activate you!!!');
        }
    }

    public function AdminHome()
    {
        return view('admin.pages.dashboard');
    }

    public function getLogout()
    {
        auth()->logout();
        return redirect('/admin');
        // return "yes";
    }
}