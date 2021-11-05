<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use Illuminate\Http\Request;

class SurveyController extends Controller
{

    public function show($code){
        $questionnaire = Questionnaire::where('code', $code)->first();
        $questionnaire->load('questions.reponses');
        return view('survey.show' )
        ->with('questionnaire', $questionnaire);;
    }
}
