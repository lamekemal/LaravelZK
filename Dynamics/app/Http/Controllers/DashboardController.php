<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;

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

    public function listQuestionnaire(){
        $questionnaires = Questionnaire::all();
        session(['layout' => 'compact']);
        return view('dashboard.list')
        ->with('questionnaires', $questionnaires);;
    }

    public function deleteQuestionnaire($code){
        $questionnaire = Questionnaire::where('code', $code)->first();
        $questionnaire->delete();
        session(['layout' => 'compact']);
         return redirect('/DashboardQuestionnaire');
    }
}
