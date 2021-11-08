<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientDashboard;

class ClientDashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['']]);
    }

    public function index(){
        $formulaires= ClientDashboard::where('email',auth()->user()->email )->orWhere('phone', auth()->user()->phone)->get();
        $user = auth()->user();
        return view('dashboard.client')
        ->with('formulaires', $formulaires)
        ->with('userdata', $user);
    }
}
