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
                            <li><a href="https://eticket-africa.com/">E-Tiket Africa</a></li>
                        </ul>
                    </li>
                    <li><a href="/Blog">Blog</a></li>

                    <li><a href="/Contact">Contact</a></li>
                    <li><a href="/Dashboard" class="getstarted">Compte ZK</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog</h2>
                    <ol>
                        <li><a href="/">Accueil</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
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

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        @foreach ($posts as $post)
                            <article class="entry">
                                <div class="entry-img">
                                    <img src="{{ URL::asset('images/' . $post->image_path) }}" alt=""
                                        class="img-fluid">
                                </div>
                                <h2 class="entry-title">
                                    <a href="blog-single.html"> {{ $post->title }}</a>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                                            <a>{{ $post->user->name }}</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time
                                                    datetime="{{ date('j M Y', strtotime($post->updated_at)) }}">{{ date('j M Y', strtotime($post->updated_at)) }}</time></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="entry-content">
                                    <p>
                                        {{ $post->description }}
                                    </p>
                                    <div class="read-more">
                                        <a href="/Blog/{{ $post->slug }}">En savoir plus</a>
                                    </div>
                                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                        <div style="margin: 5px">
                                            <a href="/Blog/{{ $post->slug }}/edit" class="btn btn-outline-info">
                                                Modifier
                                            </a>
                                            <form class="form-group" action="/Blog/{{ $post->slug }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                                            </form>

                                        </div>
                                    @endif
                                </div>

                            </article><!-- End blog esntry -->
                        @endforeach
                        <!--div class="blog-pagination">
                            <ul class="justify-content-center">
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                            </ul>
                            </div>-->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Recherche</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <h3 class="sidebar-title">Publications Récentes</h3>
                            <div class="sidebar-item recent-posts">
                                @foreach ($posts as $key => $post)
                                    @if ($key < 5)
                                        <div class="post-item clearfix">
                                            <img src="{{ URL::asset('images/' . $post->image_path) }}" alt="">
                                            <h4><a href="blog-single.html"> {{ $post->title }}</a></h4>
                                            <time
                                                datetime="{{ date('j M Y', strtotime($post->updated_at)) }}">{{ date('j M Y', strtotime($post->updated_at)) }}</time>
                                        </div>
                                    @endif
                                @endforeach
                            </div><!-- End sidebar recent posts-->
                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

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
