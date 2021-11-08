<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['']]);
    }

    public function create($code){
        $user = auth()->user();
        if ($user->user_type == 1){
            $questionnaire = Questionnaire::where('code', $code)->first();
            //dd($questionnaire);
            return view('question.create')
                ->with('questionnaire', $questionnaire);
        }else{
            return redirect('/');
        }
    }

    public function createQcu($code){
        $user = auth()->user();
        if ($user->user_type == 1){
            $questionnaire = Questionnaire::where('code', $code)->first();
            return view('question.create-qcu')
                ->with('questionnaire', $questionnaire);
        }else{
            return redirect('/');
        }
    }

    public function createQcm($code){
        $user = auth()->user();
        if ($user->user_type == 1){
            $questionnaire = Questionnaire::where('code', $code)->first();
            return view('question.create-qcm')
                ->with('questionnaire', $questionnaire);
        }else{
            return redirect('/');
        }
    }

    public function store($code){
        $questionnaire = Questionnaire::where('code', $code)->first();
        request()->validate([
            'question.question' => 'required',
            'question_type' => 'required',
        ]);
        $questionnaire->questions()->create([
            'question' => request()->input('question.question'),
            'question_type' => request()->input('question_type'),
            'question_parent' => "0"
        ]);

        return redirect('/Questionnaires/'.$questionnaire->code);
    }

    public function storeQcu($code){
        $questionnaire = Questionnaire::where('code', $code)->first();
        request()->validate([
            'question.question' => 'required',
            'repoonses.*.reponse' => 'required',
            'question_type' => 'required',
        ]);
        $question = $questionnaire->questions()->create([
            'question' => request()->input('question.question'),
            'question_type' => request()->input('question_type'),
            'question_parent' => "0"
        ]);
        $question->reponses()->createMany(request()['reponses']);

        return redirect('/Questionnaires/'.$questionnaire->code);
    }

    public function storeQcm($code){
        $questionnaire = Questionnaire::where('code', $code)->first();
        request()->validate([
            'question.question' => 'required',
            'repoonses.*.reponse' => 'required',
            'question_type' => 'required',
        ]);
        $question = $questionnaire->questions()->create([
            'question' => request()->input('question.question'),
            'question_type' => request()->input('question_type'),
            'question_parent' => "0"
        ]);
        //dd(request()['reponses']);
        $question->reponses()->createMany(request()['reponses']);

        return redirect('/Questionnaires/'.$questionnaire->code);
    }
}
