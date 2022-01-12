@extends('layouts.masterx')
@section('title', 'ZK Consulting')

@section('main-content')
    <div class="breadcrumb">
        <h1>Formation Libre</h1>
    </div>

    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card o-hidden mb-4">
                <div class="card-header d-flex align-items-center border-0">
                    <h3 class="w-50 float-left card-title m-0">Publier une formation Gratuite</h3>
                    <div class="dropdown dropleft text-right w-50 float-right">
                        <a href="/Dashboard" class="btn btn-outline-danger" type="button">Annuler</a>
                    </div>
                </div>

                <div class="">
                    <form action="/Publication" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-4">
                            <div class="form-group">
                                <label for="basic-url" class="form-label">Titre de la publication</label>
                                <input type="text" class="form-control" aria-describedby="basic-addon3" name="title">
                                @error('title')
                                    <label for="basic-url" class="form-label alert-danger">Erreur cette section ne doit pas être
                                        vide</label>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="basic-url" class="form-label">Courte description</label>
                                <input type="text" class="form-control" name="description"
                                    aria-describedby="basic-addon3">
                                @error('description')
                                    <label for="basic-url" class="form-label alert-danger">Erreur cette section ne doit pas être
                                        vide</label>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Selectionner une image de description</label>
                                <input class="form-control m-0 p-0 h-100" lang="fr" type="file" id="formFile" name="image">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Selectionner un document pdf</label>
                                <input class="form-control m-0 p-0 h-100" lang="fr" type="file" id="formFile"
                                    name="document">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Créer la publication</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>


@endsection

@section('page-js')
    <script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/dashboard.v1.script.js') }}"></script>

@endsection
