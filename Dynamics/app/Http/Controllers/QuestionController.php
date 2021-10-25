<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;

class QuestionController extends Controller
{
    public function create(Questionnaire $questionnaire){
        return view('question.create')
            ->with('questionnaire', $questionnaire);
    }

    public function createQcu(Questionnaire $questionnaire){
        return view('question.create-qcu')
            ->with('questionnaire', $questionnaire);
    }

    public function createQcm(Questionnaire $questionnaire){
        return view('question.create-qcm')
            ->with('questionnaire', $questionnaire);
    }

    public function store(Questionnaire $questionnaire){
        dd(request()->all());
        $data = request()->validate([
            'question.question' => 'required',
            'repoonses.reponse' => 'required',
        ]);
        $data['question_type'] = "0";
        $question = $questionnaire->questions()->create($data['question']);
        $question->reponses()->create($data['reponses']);

        return redirect('/Questionnaires/'.$questionnaire->id);
    }

    public function storeQcu(Questionnaire $questionnaire){
        dd(request()->all());
        $data = request()->validate([
            'question.question' => 'required',
            'repoonses.*.reponse' => 'required',
        ]);
        $data['question_type'] = "1";
        $question = $questionnaire->questions()->create($data['question']);
        $question->reponses()->createMany($data['reponses']);

        return redirect('/Questionnaires/'.$questionnaire->id);
    }

    public function storeQcm(Questionnaire $questionnaire){
        dd(request()->all());
        $data = request()->validate([
            'question.question' => 'required',
            'repoonses.*.reponse' => 'required',
        ]);
        $data['question_type'] = "2";
        $question = $questionnaire->questions()->create($data['question']);
        $question->reponses()->createMany($data['reponses']);

        return redirect('/Questionnaires/'.$questionnaire->id);
    }
}
