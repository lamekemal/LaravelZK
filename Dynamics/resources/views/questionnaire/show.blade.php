@extends('layouts.masterx')
@section('title', 'ZK Consulting')
@section('main-content')
    <div class="breadcrumb">
        <h1>{{ $questionnaire->title }}</h1>
    </div>

    <div class="separator-breadcrumb border-top"></div>
    <div class="card">
        <div class="card-header">Outils de questionnaire</div>
        <div class="card-body">
            <a class="btn btn-success" href="/Questionnaires/{{ $questionnaire->code }}/questions/create">
                Nouvelle question</a>
            <a class="btn btn-success" href="/Questionnaires/{{ $questionnaire->code }}/questions/create-qcm">
                Nouvelle question à choix multiple</a>
            <a class="btn btn-success" href="/Questionnaires/{{ $questionnaire->code }}/questions/create-qcu">
                Nouvelle question à choix unique</a>
            <a class="btn btn-dark" href="/Survey/{{ $questionnaire->code }}">
                Observer le formulaire</a>
        </div>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card o-hidden mb-4">

                <div class="card-header d-flex align-items-center border-0">
                    <h3 class="w-50 float-left card-title m-0">Contenu du formulaire</h3>
                    <div class="dropdown dropleft text-right w-50 float-right">
                        <!--a href="/Dashboard" class="btn btn-outline-danger" type="button">Annuler</a-->
                    </div>
                </div>

                <div class="">
                    @foreach ($questionnaire->questions as $question)
                    <div class="m-6">
                        <div class="card m-4">
                            <div class="card-header">{{ $question->question }}</div>
                            <div class="card-body">
                                <ul class="list-group">
                                    @foreach ($question->reponses as $reponse)
                                        <li class="list-group-item">{{ $reponse->reponse }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-js')
    <script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/dashboard.v1.script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
@endsection
