<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['']]);
    }

    public function index(){
        session(['layout' => 'compact']);
        return view('dashboard.index', ['layout' => 'compact']);
    }
}
