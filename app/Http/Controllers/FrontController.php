<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.home');
    }
    public function showLogin()
    {
        return view('front.auth.login');
    }
    public function showRegister()
    {
        return view('front.auth.register');
    }
    public function showProducts()
    {
        return view('front.products');
    }
    public function showChefs()
    {
        return view('front.chefs');
    }
    public function chefProfile()
    {
        return view('front.chef-profile');
    }
    public function card()
    {
        return view('front.card');
    }
    public function favorite()
    {
        return view('front.favorite');
    }
    public function userProfile()
    {
        return view('front.user-profile');
    }
    public function contact()
    {
        return view('front.contact');
    }


}
