@extends('layouts.masterx')
@section('main-content')

    <div class="breadcrumb">
        <h1>Commandes</h1>
        <ul>
            <li><a>Tableau de bord</a></li>
            <li>Formulaires</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-36">
        <!-- ICON BG -->
        <a href="/Questionnaires/create" type="button" class="btn btn-success col-lg-3 col-md-6 col-sm-6 ml-3 "
            style="font-size: 2em">Nouveau formulaire</a>
    </div>

    <div class="breadcrumb mt-3">
        <h1>Statistiques</h1>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <!-- ICON BG -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Add-User"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Inscrits</p>
                        <p class="text-primary text-24 line-height-1 mb-2">0</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Checkout-Basket"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Formulaires</p>
                        <p class="text-primary text-24 line-height-1 mb-2">0</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Money-2"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">Payements</p>
                        <p class="text-primary text-24 line-height-1 mb-2">0</p>
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
