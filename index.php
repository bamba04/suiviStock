<!DOCTYPE html>
<html lang="en">
<?php
require_once 'bootstrap.php';
require_once 'src/controller/connexion.php';
?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="http://localhost/suivistock/public/template/css/font-face.css" rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/font-awesome-4.7/css/font-awesome.min.css"
          rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/font-awesome-5/css/fontawesome-all.min.css"
          rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/mdi-font/css/material-design-iconic-font.min.css"
          rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="http://localhost/suivistock/public/template/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet"
          media="all">

    <!-- Vendor CSS-->
    <link href="http://localhost/suivistock/public/template/vendor/animsition/animsition.min.css" rel="stylesheet"
          media="all">
    <link href="http://localhost/suivistock/public/template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet"
          media="all">
    <link href="http://localhost/suivistock/public/template/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="http://localhost/suivistock/public/template/vendor/select2/select2.min.css" rel="stylesheet"
          media="all">
    <link href="http://localhost/suivistock/public/template/vendor/perfect-scrollbar/perfect-scrollbar.css"
          rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="http://localhost/suivistock/public/template/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="http://localhost/suivistock/public/template/images/icon/logo.png" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="src/controller/connexion.php" method="post">
                            <div class="form-group">
                                <?php
                                if (isset($_GET['erreur'])) {
                                    $erreur = isset($_GET['erreur']);
                                    if ($erreur == 1) {
                                        echo "<p style='color:red'>l'email ou le mot de passe est incorrect</p>";
                                    }
                                }
                                ?>
                                <input class="au-input au-input--full" type="login" name="email" required
                                       placeholder="email">
                            </div>
                            <div class="form-group">
                                <input class="au-input au-input--full" type="password" name="password" required
                                       placeholder="MOT DE PASSE">
                            </div>
                            <input class="au-btn au-btn--block au-btn--green m-b-20" value="Connexion" type="submit"
                                   name="connexion"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery JS-->
<script src="http://localhost/suivistock/public/template/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="http://localhost/suivistock/public/template/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="http://localhost/suivistock/public/template/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="http://localhost/suivistock/public/template/vendor/slick/slick.min.js">
</script>
<script src="http://localhost/suivistock/public/template/vendor/wow/wow.min.js"></script>
<script src="http://localhost/suivistock/public/template/vendor/animsition/animsition.min.js"></script>
<script src="http://localhost/suivistock/public/template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="http://localhost/suivistock/public/template/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="http://localhost/suivistock/public/template/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="http://localhost/suivistock/public/template/vendor/circle-progress/circle-progress.min.js"></script>
<script src="http://localhost/suivistock/public/template/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="http://localhost/suivistock/public/template/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="http://localhost/suivistock/public/template/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="http://localhost/suivistock/public/template/js/main.js"></script>

</body>

</html>
<!-- end document-->