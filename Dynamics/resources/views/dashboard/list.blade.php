@extends('layouts.masterx')
@section('main-content')

    <div class="breadcrumb">
        <h1>Management des formulaires</h1>
        <ul>
            <li><a>Tableau de bord</a></li>
            <li>Formulaires</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="col-md-12">
        <div class="card o-hidden mb-4">
            <div class="card-header d-flex align-items-center border-0">
                <h3 class="w-50 float-left card-title m-0">Liste des formulaires disponibles</h3>
                <div class="dropdown dropleft text-right w-50 float-right">
                    <a class="btn bg-gray-100" type="button">
                        <i class="nav-icon lni lni-instagram-filled"></i>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="table-responsive">
                    <table id="user_table" class="table  text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Commanditaire</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questionnaires as $key => $questionnaire)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $questionnaire->title }}</td>
                                    <td>{{ $questionnaire->order }}</td>
                                    <td>{{ $questionnaire->created_at->format('d-m-Y à H:m') }}</td>
                                    <td>
                                        @if ($questionnaire->status == '3')
                                            <span class="badge badge-info">Actif</span>
                                            <span class="badge badge-warning">Aucun Payement</span>
                                        @else
                                            @if ($questionnaire->status == '0')
                                                <span class="badge badge-danger">Incorrect</span>
                                            @else
                                                @if ($questionnaire->status == '1')
                                                    <span class="badge badge-info">Actif</span>
                                                    <span class="badge badge-success">Sans Payement (Gratuit)</span>
                                                @else
                                                    @if ($questionnaire->status == '2')
                                                        <span class="badge badge-dark">Desactiver</span>
                                                    @else
                                                        @if ($questionnaire->status == '4')
                                                            <span class="badge badge-info">Actif</span>
                                                            <span class="badge badge-warning">Payement Encours</span>
                                                        @else
                                                            @if ($questionnaire->status == '5')
                                                                <span class="badge badge-dark">Desactiver</span>
                                                                <span class="badge badge-dark">Aucun Payement</span>
                                                            @else
                                                                <span class="badge ">Erreur</span>
                                                            @endif
                                                        @endif

                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                    <td>
                                        <a href="/Survey/{{ $questionnaire->code }}" class="text-success mr-2">
                                            <i class="nav-icon lni lni-link font-weight-bold"></i>
                                        </a>
                                        <a href="/DashboardQuestionnaire/{{ $questionnaire->code }}/delete"
                                            class="text-danger mr-2">
                                            <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
