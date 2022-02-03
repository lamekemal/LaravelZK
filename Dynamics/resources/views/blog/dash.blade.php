@extends('layouts.masterx')
@section('title', 'Tableau de bord Administrateur ZK Consulting')
@section('main-content')

    <div class="breadcrumb">
        <h1>Commandes</h1>
        <ul>
            <li><a>Tableau de bord</a></li>
            <li>Blog</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row mb-36">
        <!-- ICON BG -->
        <a href="/Dashboard/create-blog" type="button" class="btn btn-success col-lg-3 col-md-6 col-sm-6 ml-3 "
            style="font-size: 2em">Publier un article au Blog</a>
    </div>

    <div class="breadcrumb mt-3">
        <h1>Articles</h1>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="col-md-12">
        <div class="card o-hidden mb-4">
            <div class="card-header d-flex align-items-center border-0">
                <h3 class="w-50 float-left card-title m-0">Liste des articles</h3>
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
                                <th scope="col">Nom de code</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $key => $post)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->slug }}</td>
                                    <td>{{ $post->created_at->format('d-m-Y à H:m') }}</td>
                                    <td>
                                        <a href="/Blog/{{ $post->slug }}" class="text-success mr-2">
                                            <i class="nav-icon lni lni-link font-weight-bold"></i>
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
@endsection

@section('page-js')
    <script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/echart.options.min.js') }}"></script>
    <script src="{{ asset('assets/js/es5/dashboard.v1.script.js') }}"></script>

@endsection
