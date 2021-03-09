<?php
require_once 'src/controller/deconnexion.php';
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 2</title>

    <!-- Fontfaces CSS-->
    <link href="http://localhost/suivistock/public/template/vendor/font-awesome-4.7/css/font-awesome.min.css"
          rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/css/font-face.css" rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/font-awesome-5/css/fontawesome-all.min.css"
          rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/mdi-font/css/material-design-iconic-font.min.css"
          rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->

    <link href="http://localhost/suivistock/public/template/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet"
          media="all">
    <!-- Vendor CSS-->
    <link href="http://localhost/suivistock/public/template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/animsition/animsition.min.css" rel="stylesheet"
          media="all">
    <link href="http://localhost/suivistock/public/template/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet"
          media="all">
    <link href="http://localhost/suivistock/public/template/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/select2/select2.min.css" rel="stylesheet"
          media="all">
    <link href="http://localhost/suivistock/public/template/vendor/perfect-scrollbar/perfect-scrollbar.css"
          rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/vector-map/jqvmap.min.css" rel="stylesheet"
          media="all">

    <!-- Main CSS-->
    <link href="http://localhost/suivistock/public/template/css/theme.css" rel="stylesheet" media="all">

</head>
<!-- HEADER DESKTOP-->
<header class="header-desktop2">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap2">
                <div class="logo d-block d-lg-none">
                    <a href="http://localhost/suivistock/accueil.php">
                        <img src="http://localhost/suivistock/public/template/images/icon/logo-white.png"
                             alt="CoolAdmin"/>
                    </a>
                </div>
                <div class="header-button2">
                    <div class="header-button-item js-item-menu">
                        <i class="zmdi zmdi-search"></i>
                        <div class="search-dropdown js-dropdown">
                            <form action="">
                                <input class="au-input au-input--full au-input--h65" type="text"
                                       placeholder="Search for datas &amp; reports..."/>
                                <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                            </form>
                        </div>
                    </div>

                    <div class="header-button-item has-noti js-item-menu">

                        <i class="zmdi zmdi-notifications"></i>
                        <div class="notifi-dropdown js-dropdown">

                            <div class="notifi__title">
                                <p>You have 3 Notifications</p>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c1 img-cir img-40">
                                    <i class="zmdi zmdi-email-open"></i>
                                </div>
                                <div class="content">
                                    <p>You got a email notification</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c2 img-cir img-40">
                                    <i class="zmdi zmdi-account-box"></i>
                                </div>
                                <div class="content">
                                    <p>Your account has been blocked</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__item">
                                <div class="bg-c3 img-cir img-40">
                                    <i class="zmdi zmdi-file-text"></i>
                                </div>
                                <div class="content">
                                    <p>You got a new file</p>
                                    <span class="date">April 12, 2018 06:50</span>
                                </div>
                            </div>
                            <div class="notifi__footer">
                                <a href="#">All notifications</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-button-item">
                        <a href="http://localhost/suivistock">
                            <button type="button" class="btn btn-danger">Deconnexion</button>
                        </a>
                    </div>
                    <div class="header-button-item mr-0 js-sidebar-btn">
                        <i class="zmdi zmdi-menu"></i>
                    </div>
                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="#">
            <img src="http://localhost/suivistock/public/template/images/icon/logo-white.png" alt="Cool Admin"/>
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1">
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="http://localhost/suivistock/accueil.php">
                        <i class="fas fa-hospital-o"></i>Accueil</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-shopping-basket"></i>Produits
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="http://localhost/suivistock/src/view/produit/ajoutProduit.php">
                                <i class="far fa-check-square"></i>Ajout d'un produit</a>
                        </li>
                        <li>
                            <a href="http://localhost/suivistock/src/view/produit/produitList.php">
                                <i class="fas fa-table"></i>Liste Produits</a>
                        </li>

                        <li>
                            <a href="http://localhost/suivistock/src/view/produit/rechercheProduit.php">
                                <i class="fas fa-search"></i>rechercher un produit</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Utilisateur
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="http://localhost/suivistock/src/view/user/userList.php">
                                <i class="fas fa-table"></i>Liste Utilisateurs</a>
                        </li>
                        <li>
                            <a href="http://localhost/suivistock/src/view/user/ajoutUser.php">
                                <i class="far fa-check-square"></i>Ajout d'un utilisateur</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
      