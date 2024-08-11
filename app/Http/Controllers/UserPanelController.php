<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    //

    public function index(){
        return view('users.pages.home');
    }
}
