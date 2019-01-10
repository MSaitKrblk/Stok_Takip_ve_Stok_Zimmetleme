<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeGetController extends Controller
{
    public function get_girisYap(){

    }
    public function get_cikisYap(){
        Auth::logout();
        return redirect('/');
    }
    public function get_index(){
        return view('adminPanel.login');
    }
    public function get_home(){
        return view('adminPanel.index');
    }
}
