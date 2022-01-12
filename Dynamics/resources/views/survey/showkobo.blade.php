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
                <?php

                    $doc = new DOMDocument;
                   // libxml_use_internal_errors(true);
                    $doc->preserveWhiteSpace = false;
                    $doc->strictErrorChecking = false;
                    $doc->recover = true;

                    $doc->loadHTMLFile("https://ee.kobotoolbox.org/x/9CyUd95T", LIBXML_NOWARNING);

                    $xpath = new DOMXPath($doc);

                    $query = "//div[@class='main']";

                    $entries = $xpath->query($query);
                    var_dump($entries->item(0)->textContent);

                    ?>
            </div>
            <div class="col-4">
                <div class="fixed-top ml-3 mr-5" style="max-width: 230px ! important; margin-top: 5em;">
                    <div class="list-group">
                        <a class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">ESPACE PUBLICITAIRE</h5>
                            </div>
                            <p class="mb-1">Formulaire rémunéré a hauteur de  F
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
