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
                                MERCI</h1>
                            <h1 class="mb-3 text-18 text-center bold">Merci pour vos réponses, après étude du formulaire
                                vous recevrai un mail de confirmation et s'il s'agit d'un formulaire rémunérer, votre compte
                                ZK-CONSULTING sera crédité </h1>
                            <a href="/" class="btnbtn-outline-secondary btn-block mt-2" style="width: 100%">Accueil</a>
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
