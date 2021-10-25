@extends('layouts.appx')
@section('title', 'ZK Consulting')

@section('content')

    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Créé une nouvelle question QCM </div>
                        <div class="card-body">
                            <form action="/Questionnaires/{{ $questionnaire -> id }}/questions-qcm" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="question">Question QCM </label>
                                    <input id="question[question]" aria-placeholder="questionHelp" placeholder="Contenu de la question"
                                    name="question"type="text" class="form-control" aria-describedby="questionHelp">
                                    <small id="questionHelp" class="form-text text-muted">Entrer une question à réponse multiple.</small>
                                    @error('question.question')
                                        <small class="test-danger">{{ $message }}</small>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <fieldset>
                                        <legend> Choix multiple</legend>
                                        <small id="choiceHelp" class="form-text text-muted">Entrez les réposnse choix disponible</small>
                                        <a class="btn btn-outline-primary" id="addreponse">Ajouter une suggestion</a>
                                        <div id="reponsemaster"></div>
                                    </fieldset>
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
