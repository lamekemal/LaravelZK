@extends('layouts.appx')
@section('title', 'ZK Consulting')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $questionnaire->title }}</div>
                <div class="card-body">
                    <a class="btn btn-success" href="/Questionnaires/{{ $questionnaire -> id }}/questions/create"> Nouvelle question</a>
                    <a class="btn btn-success" href="/Questionnaires/{{ $questionnaire -> id }}/questions/create-qcm"> Nouvelle question à choix multiple</a>
                    <a class="btn btn-success" href="/Questionnaires/{{ $questionnaire -> id }}/questions/create-qcu"> Nouvelle question à choix unique</a>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
