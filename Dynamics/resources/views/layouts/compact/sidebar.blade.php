<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">

            <li class="nav-item {{ request()->is('forms/*') ? 'active' : '' }}">
                <a class="nav-item-hold" href="/Questionnaires/create" target="_blank">
                    <i class="nav-icon i-Add"></i>
                    <span class="nav-text">Nouveau</span>
                </a>
                <div class="triangle"></div>
            </li>

            <li class="nav-item {{ request()->is('dashboard/*') ? 'active' : '' }} {{ request()->is('large-compact-sidebar/dashboard/*') ? 'active' : '' }}"
                data-item="dashboard">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Tableau de bord</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('sessions/*') ? 'active' : '' }}" data-item="sessions">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Inscrits</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('formation/*') ? 'active' : '' }}" data-item="formation">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Book"></i>
                    <span class="nav-text">Inscrits</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <img src="{{ asset('assets/images/logo-zk.png') }}" alt=""
                    style="width: 100% !important; height: auto;">
            </div>
        </header>
        <!-- Submenu Dashboards -->
        <div class="submenu-area" data-parent="dashboard">
            <header>
                <div class="logo">
                    <img src="{{ asset('assets/images/logo-text.png') }}" alt=""
                        style="width: 100% !important; height: auto;">
                </div>
                <h6>Dashboard</h6>
                <p>Tableau de bord administrateur</p>
            </header>
            <ul class="childNav" data-parent="dashboard">
                <li class="nav-item">
                    <a href="/Dashboard"
                        class="{{ Route::currentRouteName() == 'dashboard_version_2' ? 'open' : '' }}">

                        <span class="item-name">Acceuil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Questionnaires/create"
                        class="{{ Route::currentRouteName() == 'dashboard_version_2' ? 'open' : '' }}">

                        <span class="item-name">Noveau Formulaire</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'dashboard_version_3' ? 'open' : '' }}" href="/">

                        <span class="item-name">Donnée des formulaires</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'dashboard_version_4' ? 'open' : '' }}"
                        href="/DashboardQuestionnaire">

                        <span class="item-name">Liste des formulaires</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() == 'dashboard_version_4' ? 'open' : '' }}" href="">

                        <span class="item-name">Validation des paiements</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="sessions">
            <header>
                <div class="logo">
                    <i class="fas fa-user-cog"></i>
                </div>
                <h6>Utilisateurs</h6>
                <p>Gestion des utilisateurs</p>
            </header>
            <ul class="childNav" data-parent="sessions">

                <li class="nav-item">
                    <a href="/Dashboard/Utilisateur"
                        class="{{ Route::currentRouteName() == 'dashboard_version_2' ? 'open' : '' }}">
                        <span class="item-name">Gestion des utilisateurs</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="formation">
            <header>
                <div class="logo">
                    <i class="fas fa-user-cog"></i>
                </div>
                <h6>Blog & Formation Zk</h6>
                <p>Gestion des formations, blog et utilisateurs</p>
            </header>
            <ul class="childNav" data-parent="sessions">
                <li class="nav-item">
                    <a href="/Dashboard/create-oforma"
                        class="{{ Route::currentRouteName() == 'dashboard_version_2' ? 'open' : '' }}">
                        <span class="item-name">Publier une formation Gratuite</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/Dashboard/formation-libre"
                        class="{{ Route::currentRouteName() == 'dashboard_version_2' ? 'open' : '' }}">
                        <span class="item-name">Gestion des Formations libre</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/Dashboard/blog"
                        class="{{ Route::currentRouteName() == 'dashboard_version_2' ? 'open' : '' }}">
                        <span class="item-name">Gestion des Blogs</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
