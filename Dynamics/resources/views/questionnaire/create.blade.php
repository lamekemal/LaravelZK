@extends('layouts.appx')
@section('title', 'ZK Consulting')

@section('content')

    <div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Créé un nouveau questionnaire </div>
                        <div class="card-body">
                            <form action="/Questionnaires" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="basic-url" class="form-label">Titre de votre Questionnaire</label>
                                    <input type="text" class="form-control" aria-describedby="basic-addon3" name="title">
                                </div>

                                <div class="form-group">
                                    <label for="basic-url" class="form-label">Courte description</label>
                                    <input type="text" class="form-control" name="purpose"
                                        aria-describedby="basic-addon3">
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
