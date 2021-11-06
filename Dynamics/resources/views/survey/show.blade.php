<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquete - ZK Consulting</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/styles/css/themes/lite-purple.min.css') }}">
</head>

<body>

    <div class="auth-layout-wrap"
        style="background-image: url({{ asset('assets/images/bg-survey.jpg') }}); background-repeat: no-repeat; background-attachment: fixed;">
        <div class="row justify-content-between">
            <div class="col auth-content pt-6 mb-4" style="margin-top: 5em;">
                <div class="card o-hidden">
                    <div class="m-6 col-md-12" style="width:100% ! important">
                        <div class="p-4">
                            <h1 class="mb-3 text-35 text-center bold" style="color: #0047ab">
                                {{ $questionnaire->title }}</h1>
                            <h1 class="mb-3 text-18 text-center bold">{{ $questionnaire->description }}</h1>
                            <img class="mb-3" src="{{ asset('assets/images/$questionnaire->images') }}"
                                alt="">
                            <form method="POST" action="/Survey/{{ $questionnaire->code }}">
                                @csrf
                                @foreach ($questionnaire->questions as $key => $question)
                                    @if ($question->question_type == 0)
                                        <div class="mt-5 form-group">
                                            <h3 class="mb-2 text-18 bold" style="color: #0047ab">
                                                <strong>{{ $key + 1 }}. </strong> {{ $question->question }}
                                            </h3>
                                            <input style="margin-left: 10px" id="text" class="form-control"
                                                name="reponses[{{ $key }}][reponse_id]"
                                                value="{{ old('reponse') }}">
                                            <input type="hidden" id="text" class="form-control"
                                                name="reponses[{{ $key }}][question_id]"
                                                value="{{ $question->id }}">
                                        </div>
                                    @else
                                        @if ($question->question_type == 1)
                                            <div class=" mt-5 form-group">
                                                <h3 class="mb-2 text-18 bold" style="color: #0047ab">
                                                    <strong>{{ $key + 1 }}. </strong> {{ $question->question }}
                                                </h3>
                                                <ul>
                                                    @foreach ($question->reponses as $reponse)
                                                        <label for="reponse{{ $reponse->id }}">
                                                            <li class="list-group-item">
                                                                <input name="reponses[{{ $key }}][reponse_id]"
                                                                    type="radio" id="reponse{{ $reponse->id }}"
                                                                    value="{{ $reponse->id }}">
                                                                {{ $reponse->reponse }}
                                                                <input type="hidden" id="text" class="form-control"
                                                                    name="reponses[{{ $key }}][question_id]"
                                                                    value="{{ $question->id }}">
                                                            </li>
                                                        </label>

                                                    @endforeach
                                                </ul>
                                            </div>
                                        @else
                                            @if ($question->question_type == 2)
                                                <div class=" mt-5 form-group">
                                                    <h3 class="mb-2 text-18 bold" style="color: #0047ab">
                                                        <strong>{{ $key + 1 }}. </strong>
                                                        {{ $question->question }}
                                                    </h3>
                                                    <ul>
                                                        @foreach ($question->reponses as $count => $reponse)
                                                            <label for="reponse{{ $reponse->id }}">
                                                                <li class="list-group-item">
                                                                    <input
                                                                        name="reponses[{{ $key }}][{{ $count }}][reponse_id]"
                                                                        type="checkbox"
                                                                        id="reponse{{ $reponse->id }}"
                                                                        value="{{ $reponse->id }}">
                                                                    {{ $reponse->reponse }}
                                                                    <input type="hidden" id="text"
                                                                        class="form-control"
                                                                        name="reponses[{{ $key }}][question_id]"
                                                                        value="{{ $question->id }}">
                                                                </li>
                                                            </label>

                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        @endif
                                    @endif
                                @endforeach
                                <hr class="mt-2">
                                <div class="m-3 card">
                                    <div class="card-header">
                                        Informations supplémentaires
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Nom</span>
                                                </div>
                                                <input name="contacts[name]" type="text" class="form-control"
                                                    placeholder="Nom Complet" aria-label="Nom Complet"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">E-Mail</span>
                                                </div>
                                                <input type="email" name="contacts[email]" class="form-control"
                                                    placeholder="E-Mail" aria-label="E-mail"
                                                    aria-describedby="basic-addon1" required>
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">Téléphone</span>
                                                </div>
                                                <input type="phone" name="contacts[phone]" class="form-control"
                                                    placeholder="Teléphone" aria-label="Teléphone"
                                                    aria-describedby="basic-addon1" required>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <button class="btn btn-success btn-block mt-2" style="width: 200px">Soumettre</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="fixed-top ml-3 mr-5" style="max-width: 230px ! important; margin-top: 5em;">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">ESPACE PUBLICITAIRE</h5>
                            </div>
                            <p class="mb-1">Formulaire rémunéré a hauteur de {{ $questionnaire->price }} F
                                CFA</small>
                                <a href="#"
                                    class="list-group-item list-group-item-action flex-column align-items-start"><s></s>
                                    <img src="{{ asset('assets/images/pub.jpg') }}" alt="yoast seo" height="300"
                                        width="100%" />
                                </a>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/common-bundle-script.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
