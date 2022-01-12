@extends('layouts.masterc')
@section('title', 'Compte Royal Survey')
@section('main-content')
    <div class="breadcrumb">
        <h1>Bilan des Enquettes</h1>
        <ul>
            <li><a href="">Dashboard</a></li>
            <li>Compte Royal Survey</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card o-hidden mb-4">
                <div class="card-header d-flex align-items-center border-0">
                    <h3 class="w-50 float-left card-title m-0">Liste des  formulaires remplis</h3>
                    <div class="dropdown dropleft text-right w-50 float-right">
                        <!--div>
                        <button class="btn bg-gray-100" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="nav-icon i-Gear-2"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a class="dropdown-item" href="#">Add new user</a>
                            <a class="dropdown-item" href="#">View All users</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div-->
                    </div>
                </div>

                <div class="">
                    <div class="table-responsive">
                        <table id="user_table" class="table  text-center">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Titre du formulaire</th>
                                    <th scope="col">Rémunération</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formulaires as $key => $formulaire)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $formulaire->questionnaire_title }}</td>
                                        <td>{{ $formulaire->price }}</td>
                                        <td>
                                            @if ($questionnaire->status == '1')
                                                <span class="badge badge-warning">Aucun Payement</span>
                                            @else
                                                @if ($questionnaire->status == '2')
                                                    <span class="badge badge-success">Compte Acréditer</span>
                                                @endif
                                            @endif
                                        </td>
                                        <td>
                                        <td>Non autoriser</td>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="card bg-dark text-white o-hidden mb-4">
                <img class="card-img" src="{{ asset('assets/images/cbim.jfif') }}" alt="Card image">
                <div class="card-img-overlay">
                    <div class="text-center pt-4">
                        <h5 class="card-title mb-2 text-white">Portefeuille</h5>
                        <div class="separator border-top mb-2"></div>
                        <p class="text-small font-italic">Total disponible pour retrait</p>
                    </div>
                    <h1 class=" text-white text-38">0 F CFA</h1>
                    <div class="p-1 text-left card-footer font-weight-light d-flex">
                        <span class="d-flex align-items-center"><i class="i-Calendar-4 mr-2"></i>Date de dernier
                            paiement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('page-js')
    <script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/dashboard.v3.script.js') }}"></script>

@endsection
