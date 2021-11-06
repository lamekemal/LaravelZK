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


    public function store($code){
        $questionnaire = Questionnaire::where('code', $code)->first();
        //dd(request()['contacts']);
        $data = request();
        $survey = $questionnaire->surveys()->create($data['contacts']);
        $survey->responses()->createMany($data['responses']);
        dd($data['contacts']);
        return view('survey.merci' )
        ->with('questionnaire', $questionnaire);;
    }
}
