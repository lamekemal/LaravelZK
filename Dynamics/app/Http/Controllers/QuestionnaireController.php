<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function create(){
        return view('questionnaire.create');
    }

    public function store(){

        $data = request()->validate([
            'title'=>'required',
            'purpose'=>'required',
        ]);
        $data['user_id'] = "1";
        $data['price'] = "1";
        $data['status'] = "1";
        $data['validator'] = "1";
        $questionnaire = \App\Models\Questionnaire::create($data);
        return redirect('/Questionnaires/' .$questionnaire->id);
    }
    public function show( \App\Models\Questionnaire $questionnaire){

        return view('questionnaire.show')
        ->with('questionnaire', $questionnaire);
    }


}
