<?php

namespace App\Http\Controllers;
use Image;
use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function create()
    {
        session(['layout' => 'compact']);
        return view('questionnaire.create', ['layout' => 'compact']);
    }

    public function store(Request $request)
    {
        session(['layout' => 'compact']);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:5048'
        ]);
        if($request->hasFile('image')){

            $image = $request->file('image');
            $newImageName = uniqid() . '-' .time().'.'.$image->extension();

            $destinationPath = public_path('/images');
            $img = Image::make($image->path());
            $img->resize(450, 450, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$newImageName);

            /*$destinationPath = public_path('/thumbnail');
            $image->move($destinationPath, $newImageName);*/

            $questionnaire = Questionnaire::create(
                [
                    'user_id' => auth()->user()->id,
                    'title' => $request->input('title'),
                    'description' => $request->input('description'),
                    'price' => $request->input('price'),
                    'status' => "0",
                    'validator' => "0",
                    'images' => $newImageName,
                    'code' => $this->generateRandomString(5)
                ]
            );
            return redirect('/Questionnaires/' .$questionnaire->code);
        }else{
            $questionnaire = Questionnaire::create(
                [
                    'user_id' => auth()->user()->id,
                    'title' => $request->input('title'),
                    'description' => $request->input('description'),
                    'price' => $request->input('price'),
                    'status' => "0",
                    'validator' => "0",
                    'images' => "npne",
                    'code' => $this->generateRandomString(5)
                ]
            );
            return redirect('/Questionnaires/' .$questionnaire->code);
        }
    }

    public function show($code)
    {

        $questionnaire = Questionnaire::where('code', $code)->first();
        $questionnaire->load('questions.reponses');

        return view('questionnaire.show')
            ->with('questionnaire', $questionnaire);
    }
}
