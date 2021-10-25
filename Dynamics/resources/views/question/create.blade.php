@extends('layouts.appx')
@section('title', 'ZK Consulting')

@section('content')

    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Créé une nouvelle question </div>
                        <div class="card-body">
                            <form action="/Questionnaires/{{ $questionnaire -> id }}/questions" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="question">Question texte </label>
                                    <input id="question[question]" aria-placeholder="questionHelp" placeholder="Contenu de la question"
                                    name="question"type="text" class="form-control" aria-describedby="questionHelp">
                                    <small id="questionHelp" class="form-text text-muted">Entrer une question à réponse texte.</small>
                                    @error('question.question')
                                        <small class="test-danger">{{ $message }}</small>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <input hidden id="reponse" aria-placeholder="" placeholder="Contenu de la question"
                                    name="reponse[reponse]"type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-warning">Créer le Questionnaire</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
