<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>ZK Consulting - Accueil</title>
    <meta name="subject" content="analyse de donnée bénin" />
    <meta name="author" content="KEmal DARA - Archeos" />
    <meta name="copyright" content="Zk Consulting" />
    <meta name="owner" content="Zhoul Karimou" />
    <meta property="og:site_name" content="zkconsulting.bj" />
    <meta property="og:title" content="Zk Consulting" />
    <meta property="og:description"
        content="Structure béninoise spécialisée dans la collecte et l'analyse des données. Production d'application JS & Android" />
    <meta property="og:type" content="website" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
        content="Zk Consulting; enquête au bénin; creation de site web bénin; création de logiciels bénin; statistique bénin; argent sur internet bénin"
        name="keywords" />
    <meta content="Zk Consulting est une structure béninoise spécialisé dans la collecte et l'analyse de données."
        name="description" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Favicons -->
    <link href="{{ asset('assetsx/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('assetsx/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsx/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsx/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsx/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsx/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsx/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsx/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assetsx/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsx/css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1>-->
            <a href="/" class="logo me-auto"><img src="{{ asset('assetsx/img/logo.png') }}" alt=""
                    class="img-fluid" /></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/" class="active">Accueil</a></li>
                    <li class="dropdown">                                                                                                                          
                        <a href="/#about"><span>Qui sommes-nous?</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/#about">A-propos</a></li>
                            <li><a href="/#services">Nos prestations</a></li>
                            <li><a href="/#formation">Nos formations</a></li>
                            <li><a href="/#faq">Nos services</a></li>
                        </ul>
                    </li>
                    <li><a href="/Publication">Publications</a></li>
                    <li class="dropdown">
                        <a href="/#faq"><span>ZK Solutions</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/">RoyalSurey</a></li>
                            <li><a href="https://eticket-africa.com/">E-Ticket Africa </a><li>
                        </ul>
                    </li>
                    <li><a href="/Blog">Blog</></li>

                    <li><a href="/Contact">Contact</a></li>
                    <li><a href="/Dashboard" class="getstarted">Compte ZK</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url({{ asset('assetsx/img/slide/slide-1.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                ZK Consulting <span>votre solution pour le Digital</span>
                            </h2>
                            <!--p class="animate__animated animate__fadeInUp">
                  Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut
                  et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                  mollitia ut. Similique ea voluptatem. Esse doloremque
                  accusamus repellendus deleniti vel. Minus et tempore modi
                  architecto.
                </p>-->
                            <a href="#about"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">CONTACTEZ-NOUS</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item"
                    style="background-image: url({{ asset('assetsx/img/slide/slide-2.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                ZK Consulting <span>votre solution pour le Digital</span>
                            </h2>
                            <!--p class="animate__animated animate__fadeInUp">
                  Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut
                  et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                  mollitia ut. Similique ea voluptatem. Esse doloremque
                  accusamus repellendus deleniti vel. Minus et tempore modi
                  architecto.
                </p>-->
                            <a href="#about"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">CONTACTEZ-NOUS</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item"
                    style="background-image: url({{ asset('assetsx/img/slide/slide-3.jpg') }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">
                                ZK Consulting <span>votre solution pour le Digital</span>
                            </h2>
                            <!--p class="animate__animated animate__fadeInUp">
                  Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut
                  et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                  mollitia ut. Similique ea voluptatem. Esse doloremque
                  accusamus repellendus deleniti vel. Minus et tempore modi
                  architecto.
                </p>-->
                            <a href="#about"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">CONTACTEZ-NOUS</a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-6">
                        <h2>Qui sommes nous?</h2>
                        <h3>
                            ZK Consulting, décortique les données pour percevoir leur
                            véritable signification.
                        </h3>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            ZK CONSULTING est un cabinet d'expertise statistique qui possède
                            une équipe d'analyste expert en sciences des données au service
                            de la prise de décision et de l'action.
                        </p>
                        <p>
                            A partir d’un examen approfondi de votre projet, nous
                            construisons une réponse singulière et optimisée en fonction des
                            objectifs de l’étude et du budget alloué.
                        </p>
                        <p>
                            Pour cela nous déployons une démarche opérationnelle fondée sur
                            une culture scientifique et mise en œuvre par nos
                            collaborateurs, tous ingénieurs.
                        </p>
                        <p>
                            Votre projet bénéficie de l'éclairage apporté par notre
                            intervention fondée sur:
                        </p>
                        <ul>
                            <li>
                                <i class="ri-check-double-line"></i> L’organisation optimisée
                                du recueil d’informations et de la méthodologie de l'étude
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> La formation des agents
                                et la collecte de données de qualité sur le terrain
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Le contrôle et la
                                visualisation des données collectés en temps réels
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> L'analyse statistique des
                                données et l’interprétation des résultats que nous délivrons.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assetsx/img/clients/t1.png') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assetsx/img/clients/t2.png') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assetsx/img/clients/t3.png') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assetsx/img/clients/t4.png') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assetsx/img/clients/t5.png') }}" class="img-fluid" alt="" />
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assetsx/img/clients/t6.png') }}" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <h3 class="text-center fw-bold">Nos prestations</h3>
                <p class="text-center fst-italic">
                    Conception, suivi et digitalisation sur smartphone. Collecte
                    automatique de données et analyse.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="bi bi-phone"></i>
                            <h4><a href="#">LDigitalisation des questionnaires</a></h4>
                            <p>
                                Digitalisation des questionnaires d’enquêtes avec des outils
                                les plus sophistiqué dans le domaine des collectes de données.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-receipt"></i>
                            <h4><a href="#">Enquêtes de terrains</a></h4>
                            <p>
                                >Planification, pilotage des activités de collectes de
                                données. Conception des fiches d’enquêtes et formations des
                                agents dans nos salles de formation.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                            <h4><a href="#">contrôle des agents en temps réel</a></h4>
                            <p>
                                Visualisation en temps réel des données et controle des agents
                                enquêteurs depuis notre salle CTA (Centre de Traitements et
                                d’Analyse).
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-file-earmark-bar-graph"></i>
                            <h4><a href="#">Analyse statistique</a></h4>
                            <p>
                                L'analyse des données sous différents logiciels tels que R,
                                Python, SPSS, SAS et STATA
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-chat-square-quote-fill"></i>
                            <h4><a href="#">Interprétation d'Analyse</a></h4>
                            <p>
                                Analyses des données en temps reel et rapport d’interpretation
                                des resultats
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-card-heading"></i>
                            <h4><a href="#">Outils de visualisation</a></h4>
                            <p>
                                La visualisation des données en temps réels avec les outils
                                comme Tableau, PowerBI, Data Studio, Plotly.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-pin-map-fill"></i>
                            <h4><a href="#">Location des Tablettes, Drones et GPS</a></h4>
                            <p>
                                Location des tablettes, drones et GPS pour la collecte des
                                données sur le terrain chez ZK
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-collection"></i>
                            <h4>
                                <a href="#">Conception des robots de collectes de données</a>
                            </h4>
                            <p>
                                Conception de robots pour la collecte de données comme la
                                pluviométrie, le taux de fertilisation, l’humidité de l’air et
                                du sol, la temperature ambiante de manière automatique et à
                                toutes les heures de la journée
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-app-indicator"></i>
                            <h4>
                                <a href="#">Conception de SiteWeb et Application mobile</a>
                            </h4>
                            <p>
                                Desing, Conception et réalisation de siteweb, application
                                mobile : Android et IOS
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="bi bi-house-fill"></i>
                            <h4><a href="#">Location de salle</a></h4>
                            <p>
                                Location de salle de formation équipée, d'espace de réunion et
                                de salle de co-working à des coûts défiants toute concurence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->
        <!-- Section formation-->
        <section id="formation" class="about" style="background-color: rgb(250, 250, 250)">
            <div class="container">
                <h3 class="text-center fw-bold">Nos formations</h3>
                <div class="row content">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Zkconsulting offre une multitude de formation professionnel
                            certifiante dispensé à distance ou de manière présentiel. Nos
                            formations sont disponibles en langue française et anglaise à
                            savoir :
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Data Science</li>
                            <li><i class="ri-check-double-line"></i> Data Analyse</li>
                            <li><i class="ri-check-double-line"></i> Programmation R</li>
                            <li><i class="ri-check-double-line"></i> Excel</li>
                            <li><i class="ri-check-double-line"></i> Python</li>
                            <li>
                                <i class="ri-check-double-line"></i> Data Entry (Kuboo, Survey
                                Solution, Monney Survey, ODK, etc.)
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <img style="max-height: 310px" src="{{ asset('assetsx/img/forms.png') }}"
                            class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features">
            <div class="container">
                <div class="section-title">
                    <h2>Plus-value</h2>
                    <p>Pourquoi nous?</p>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Rapidité de
                                    travail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Controle en temps</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Visualisation des
                                    données</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Analyse des données</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Rapport</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Rapidité de travail peut importe la taille</h3>
                                        <p class="fst-italic">
                                            la taille de la collecte ou l'échelle ne nous influence
                                            pas
                                        </p>
                                        <p>
                                            Obtenez vos digitalisation en moins de 72h et la mise en
                                            place de votre platform de controle des agents depuis le
                                            terrain
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assetsx/img/features-1.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Controle en temps réel du déroulement</h3>
                                        <p class="fst-italic">
                                            eviter les déshilusion et optimiser votre collecte
                                        </p>
                                        <p>
                                            Controler les agents de terrain depuis notre centre de
                                            traitement et d'analyse et obtenez tous les 48h les
                                            rapports sur chaque agent
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assetsx/img/features-2.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Visualisation des données brutes ou traités</h3>
                                        <p class="fst-italic">via web, android ou pc.....</p>
                                        <p>
                                            Vusualisez les données en temps reel de tout ce qui se
                                            passe sur le terrain depuis notre centre de controle.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assetsx/img/features-3.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Analyse des données de collecte</h3>
                                        <p class="fst-italic">
                                            Analyse de donnée automatisé avec des référentielles
                                            évolutif
                                        </p>
                                        <p>
                                            Analysez vos données avec les logiciels les plus
                                            performants et par nos experts.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assetsx/img/features-5.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Rapport de collecte</h3>
                                        <p class="fst-italic">
                                            rapport détaillé de collecte, suivi, exécution
                                        </p>
                                        <p>
                                            Interpretation des resultats d’analyses et redaction
                                            scientifiques des rapports et suivi dans le processus du
                                            document final.
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ asset('assetsx/img/features-4.png') }}" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Section -->
        <section id="faq" class="faq">
            <div class="container">
                <div class="section-title">
                    <h2>ZK-ENTREPRISE</h2>
                    <p>Services</p>
                </div>
                <section id="pricing" class="pricing">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-md-6">
                                <div class="box">
                                    <h3>RoalSurvey</h3>
                                    <img src="{{ asset('assetsx/img/logo-survey.png') }}" alt=""
                                        class="img-fluid" style="height: 150px" />
                                    <p class="font-weight-light">
                                        RoyalSurey Et une platforme de collecte de donné
                                        propriétaire qui combine la puissance offerte par des
                                        plateformes comme KOBOCollect et une technologie de
                                        rémunération.
                                    </p>
                                    <div class="btn-wrap">
                                        <a href="https://royalsurvey.zkconsulting.bj"
                                            class="btn-buy">Demarrer</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                                <div class="box featured">
                                    <h3>Etiet Africa</h3>
                                    <img src="{{ asset('assetsx/img/etiket-africa-logo.png') }}" alt=""
                                        class="img-fluid" style="height: 150px" />
                                    <p>
                                        E-ticket Africa est une plateforme de gestion (ventes et
                                        édition) de billetterie et de vote en ligne en temps réel
                                        pour l'Afrique et proposé par la société ZK Consulting.
                                    </p>
                                    <div class="btn-wrap">
                                        <a href="https://eticket-africa.com/" class="btn-buy">Demarrer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3><strong>ZK</strong>CONSULTING</h3>
                            <p>
                                Rue de l'Abatoir <br />
                                Cotonou, Bénin<br /><br />
                                <strong>Telephone:</strong> +229 65 98 90 55/ +229 66 98 04
                                09<br />
                                <strong>Email:</strong> zkconsulting024@gmail.com<br />
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Lien Utile</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Etiket Africa</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">RoyalSurey</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">ZK-Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Information</h4>
                        <p>ZKC est une entreprise béninoise spécialisé dans la collecte de donnée et la fourniture de
                            service tech.</p>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Conntact par Email </h4>
                        <p>
                            Entrer votre email et notre service client vous contacteras pour un support technique
                        </p>
                        <form action="" method="post">
                            <input type="email" name="email" /><input type="submit" value="Requette" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Zkconsulting</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                2022
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="{{ asset('assetsx/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetsx/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assetsx/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsx/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assetsx/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assetsx/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assetsx/js/main.js') }}"></script>
</body>

</html>
