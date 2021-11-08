<?php

namespace App\Http\Controllers;

use App\Models\ClientDashboard;
use App\Models\Reponse;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\SurveyResponse;

class SurveyController extends Controller
{
    public function show($code){
        $questionnaire = Questionnaire::where('code', $code)->first();
        if (!empty($questionnaire)) {
            $questionnaire->load('questions.reponses');
            return view('survey.show' )
            ->with('questionnaire', $questionnaire);;
        }else{
            return abort(404);
        }
    }


    public function store($code){
        //get base data
        $questionnaire = Questionnaire::where('code', $code)->first();
        $data = request();
        $survey = $questionnaire->surveys()->create($data['contacts']);
        //Get dashboard info and Save
        $questionnaire_id =  $questionnaire->id;
        $survey_id =  $survey->id;
        $questionnaire_title =  $questionnaire->title;
        $email = $survey->email;
        $phone = $survey->phone;
        $userSurveyExist_bool= ClientDashboard::where('questionnaire_id', $questionnaire_id)
                                              ->where('email',$email )->orWhere('phone',$phone)->first();
        if(empty($userSurveyExist_bool)){
            ClientDashboard::create([
                'questionnaire_id' => $questionnaire_id,
                'survey_id' => $survey_id,
                'name' => $survey->name,
                'email' => $email,
                'phone' => $phone,
                'questionnaire_title' => $questionnaire_title,
                'status' => "1",
                'price' => $questionnaire->price
            ]);
        }
        //save on Survey Table
        foreach ($data['reponses']  as  $value) {
            $question= Question::where('id',$value['question_id'])->first();
            if( $question->question_type ==0){
                $local_reponse = $question->reponses()->create([
                    'reponse' => $value['reponse_id'],
                    'question_id' =>$question->id,
                    'reponse_type' =>"1"
                    ]);
                $survey->responses()->create([
                    'question_id'=> $value['question_id'],
                    'reponse_id' =>  $local_reponse->id,
                    'reponse_text' => $value['reponse_id']
                ]);
            }elseif( $question->question_type ==1){
                $reponse = Reponse::where('id', $value['reponse_id'])->first();
                $survey->responses()->create([
                    'question_id'=> $value['question_id'],
                    'reponse_id' =>  $value['reponse_id'],
                    'reponse_text' => $reponse->reponse
                ]);
            }elseif($question->question_type ==2){
                $reponse_text ="";
                foreach ($value['reponses_id'] as $key => $reponse_value) {
                    $reponse = Reponse::where('id', $reponse_value['reponse_id'])->first();
                    if($key ==0){
                        $reponse_text =  $reponse->reponse;

                    }else{
                        $reponse_text .= ",". $reponse->reponse;
                    }
                }
                $reponse = Reponse::where('id', $value['question_id'])->first();
                $local_bind_reponse = $question->reponses()->create([
                    'reponse' => $reponse_text,
                    'question_id' =>$question->id,
                    'reponse_type' =>"1"
                    ]);
                $survey->responses()->create([
                    'question_id'=> $value['question_id'],
                    'reponse_id' =>  $local_bind_reponse->id,
                    'reponse_text' => $reponse_text
                ]);
                foreach ($value['reponses_id'] as  $nordvalue) {
                    $survey->responsesMulti()->create([
                        'reponse_id' => $nordvalue['reponse_id'],
                        'question_id' =>$question->id
                    ]);
                }

            }
        }
        return view('survey.merci' )
        ->with('questionnaire', $questionnaire);;
    }
}
