<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.dashboard_layout');
    }
    public function index2(){
        return view('User.dashboard_layout');
    }

}
