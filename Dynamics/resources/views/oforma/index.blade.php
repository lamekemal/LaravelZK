<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>ZK Consulting - Publication</title>
    <meta name="subject" content="analyse de donnée bénin">
    <meta name="author" content="KEmal DARA - Archeos">
    <meta name="copyright" content="Zk Consulting">
    <meta name="owner" content="Zhoul Karimou">
    <meta property="og:site_name" content="zkconsulting.bj">
    <meta property="og:title" content="Zk Consulting">
    <meta property="og:description"
        content="Structure béninoise spécialisée dans la collecte et l'analyse des données. Production d'application JS & Android">
    <meta property="og:type" content="website">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="Zk Consulting; enquête au bénin; creation de site web bénin; création de logiciels bénin; statistique bénin; argent sur internet bénin"
        name="keywords">
    <meta content="Zk Consulting est une structure béninoise spécialisé dans la collecte et l'analyse de données."
        name="description">
    <meta name="theme-color" content="#ffffff">

    <!-- Favicons -->

    <link href="{{ asset('landing/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('landing/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('landing/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('landing/lib/font-awesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!--==========================
  Header
  ============================-->
    <header id="header">

        <div id="topbar">
            <div class="container">
                <div class="social-links">
                    <a href="https://www.facebook.com/ZK-Consulting-102176171280265/" class="facebook"><i
                            class="fab fa-facebook-square"></i></a>
                    <a href="https://www.youtube.com/channel/UCfuzA8XTtTS_iunR9-NI-Mg" class="youtube"><i
                            class="fab fa-youtube"></i></a>
                    <a href="https://instagram.com/zk.consulting?r=nametag" class="instagram"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="logo float-left">
                <a href="#header" class="scrollto"><img src="{{ asset('landing/img/logo.png') }}" alt=""
                        class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/#intro">Accueil</a></li>
                    <li><a href="/#about">Qui sommes-nous?</a></li>
                    <li><a href="/#services">Nos services</a></li>
                    <li><a href="/#work">Nos formations</a></li>
                    <li><a href="/Publication">Publications</a></li>
                    <li><a href="/#footer">Contactez-nous</a></li>
                    <!--li ><a style="color: #0a9735;" href="{{ asset('landing/ccd/index.php') }}">Connexion</a></li-->
                    <li><a style="color: #0a9735;" href="/Dashboard">Connexion</a></li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="introbook" class="clearfix">
        <div class="xcontainer d-flex flex-row h-100">
            <div class="row justify-content-start align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">

                </div>
            </div>

        </div>
    </section><!-- #intro -->

    <main id="main">
        <section id="about" class="about-area">

            @if (session()->has('message'))
                <div style="margin-top: 35px; margin: 25px">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-info">
                            {{ session()->get('message') }}
                        </li>
                    </ul>
                </div>
            @endif


            @if (Auth::check())
                <!--a href="/Actualite/create" class="btn btn-primary btn-lg text-uppercase"
                    style="margin-top: 35px; margin:25px;">Ajouté une
                    actualité</a-->
            @endif


            @foreach ($openformations as $openformation)

                <div class="container">
                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <div class="about-image mt-70">
                                    <img style="max-height: 350px"
                                        src="{{ URL::asset('images/' . $openformation->image_path) }}" alt="about">
                                </div> <!-- faq image -->
                            </div>
                            <div class="col">
                                <div class="faq-content mt-55">
                                    <h2>
                                        {{ $openformation->title }}
                                    </h2>
                                    <span>
                                        Par <span class="font-weight-bold font-italic">
                                            {{ $openformation->user->name }}
                                            de zk
                                        </span>, ajouté le {{ date('j M Y', strtotime($openformation->updated_at)) }}
                                    </span>
                                    <p class="text-justify" style="font-size: 19px; margin-top: 15px">
                                        {{ $openformation->description }}
                                    </p>

                                    <a href="/Publication/{{ $openformation->slug }}"
                                        class="btn btn-primary btn-lg text-uppercase"
                                        style="margin-top: 5px margin-bottom: 5px">Plus de
                                        détails</a>
                                    @if (isset(Auth::user()->id) && Auth::user()->id == $openformation->user_id)
                                        <span class="font-italic text-right float-right" style="margin: 5px">
                                            <a href="/Publication/{{ $openformation->slug }}/edit"
                                                class="btn btn-outline-info">
                                                Modifier
                                            </a>
                                        </span>
                                        <span class="font-italic text-right float-right" style="margin: 5px">
                                            <form class="form-group"
                                                action="/Publication/{{ $openformation->slug }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                            </form>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </main>
    <!--==========================Footer============================-->
    <footer id="footer" class="section-bg">
        <div class="footer-top">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="footer-info">
                                    <h3>ZK Consulting</h3>
                                    <p>ZKC est une entreprise béninoise spécialisé dans la collecte de donnée et la
                                        fourniture de service tech.</p>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="footer-links">
                                    <h4>Liens utile</h4>
                                    <ul>
                                        <li><a href="#">Accueil</a></li>
                                        <li><a href="#">A propos de nous</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Condition de service et de confidentialité</a></li>
                                        <li><a href="#">Article publique</a></li>
                                    </ul>
                                </div>

                                <div class="footer-links">
                                    <h4>Contactez nous</h4>
                                    <p>
                                        Rue de l'Abatoir <br>
                                        Cotonou<br>
                                        Bénin <br>
                                        <strong>Telephone:</strong> +229 65 98 90 55/ +229 66 98 04 09<br>
                                        <strong>Email:</strong> zkconsulting024@gmail.com<br>
                                    </p>
                                </div>

                                <div class="social-links">
                                    <a href="https://www.facebook.com/ZK-Consulting-102176171280265/"
                                        class="facebook"><i class="fab fa-facebook"></i></a>
                                    <a href="https://instagram.com/zk.consulting?r=nametag" class="instagram"><i
                                            class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCfuzA8XTtTS_iunR9-NI-Mg"
                                        class="youtube"><i class="fab fa-youtube"></i></a>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">

                        <div class="form">

                            <h4>Envoyer un message</h4>
                            <p>Message à la direction web de zk consuting. Les message web ne sont pas rapidement
                                traités, merci de nous écrire directement par mail</p>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Votre nom" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Votre Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="sujet/objet" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Message" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>

                                <div id="sendmessage">Message envoyer, Merci!</div>
                                <div id="errormessage"></div>

                                <div class="text-center"><button type="submit" title="Send Message">Envoyer</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>ZK Consulting</strong>. All Rights Reserved
            </div>
            <div class="credits" style="color: #ffffff;">
                Designed by <a style="color: #ffffff;" href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('landing/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('landing/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('landing/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('landing/lib/mobile-nav/mobile-nav.js') }}"></script>
    <script src="{{ asset('landing/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('landing/contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('landing/js/main.js') }}"></script>
    <!-- <script src="js/anim.js"></script> -->
</body>

</html>
