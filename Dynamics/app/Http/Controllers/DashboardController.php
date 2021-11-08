<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\ClientDashboard;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['']]);
    }

    public function index(){
        $user = auth()->user();
        if ($user->user_type == 1){
            session(['layout' => 'compact']);
            return view('dashboard.index', ['layout' => 'compact']);
        }else{
            $formulaires= ClientDashboard::where('email',auth()->user()->email )->orWhere('phone', auth()->user()->phone)->get();
            $user = auth()->user();
            return view('dashboard.client')
            ->with('formulaires', $formulaires)
            ->with('userdata', $user);
        }
    }

    public function listQuestionnaire(){
        $user = auth()->user();
        if ($user->user_type == 1){
            $questionnaires = Questionnaire::all();
            session(['layout' => 'compact']);
            return view('dashboard.list')
            ->with('questionnaires', $questionnaires);
        }else{
            return redirect('/');
        }

    }

    public function deleteQuestionnaire($code){
        $questionnaire = Questionnaire::where('code', $code)->first();
        $questionnaire->delete();
        session(['layout' => 'compact']);
         return redirect('/DashboardQuestionnaire');
    }
}
