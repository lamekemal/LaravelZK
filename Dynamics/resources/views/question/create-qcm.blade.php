@extends('layouts.masterx')
@section('title', 'ZK Consulting')

@section('main-content')
    <div class="breadcrumb">
        <h1>{{ $questionnaire->title }}</h1>
    </div>

    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card o-hidden mb-4">
                <div class="card-header d-flex align-items-center border-0">
                    <h3 class="w-50 float-left card-title m-0">Ajouter une nouvelle question QCM </h3>
                    <div class="dropdown dropleft text-right w-50 float-right">
                        <a href="/Questionnaires/{{ $questionnaire->code }}/" class="btn btn-outline-danger"
                            type="button">Annuler</a>
                    </div>
                </div>

                <div class="">
                    <form action="/Questionnaires/{{ $questionnaire->code }}/questions-qcm" method="post">
                        @csrf
                        <div class="p-4">

                            <div class="form-group">
                                <label class="form-label" sfor="question">Question QCM </label>
                                <input id="question" aria-placeholder="questionHelp"
                                    placeholder="Contenu de la question" name="question[question]" type="text" class="form-control"
                                    aria-describedby="questionHelp">
                                <small id="questionHelp" class="form-text text-muted">Entrer une question à réponse
                                    multiple.</small>
                                @error('question.question')
                                    <small class="test-danger">{{ $message }}</small>
                                @enderror

                            </div>

                            <div class="form-group">
                                <fieldset>
                                    <legend> Choix multiple</legend>
                                    <small id="choiceHelp" class="form-text text-muted">Entrez les réposnse choix
                                        disponible</small>
                                    <a class="btn btn-outline-primary" id="addreponse">Ajouter une suggestion</a>
                                    <div id="reponsemaster"></div>
                                </fieldset>
                            </div>
                            <input class="hidden" id="question_type" name="question_type" value="2" type="number" hidden>

                        </div>
                        <button type="submit" class="btn btn-info w-100">Ajouter la question</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('page-js')
    <script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/dashboard.v1.script.js') }}"></script>s
@endsection
