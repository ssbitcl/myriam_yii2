<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;


AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="<?php echo Url::base();?>/template/images/favicon.png" />
    <?php $this->head() ?>
</head>
<body class="">
<?php $this->beginBody() ?>


<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand brand-logo" href="<?php echo Url::to(['/site/index']);?>">
                    <img src="<?php echo Url::base();?>/template/images/logo.png?v=2" alt="logo" />
                </a>
                <a class="navbar-brand brand-logo-mini" href="<?php echo Url::to(['/site/index']);?>">
                    <img src="<?php echo Url::base();?>/template/images/logo-m.png" alt="logo" />
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                    <h1 class="welcome-text"><span class="text-black fw-bold"><?= Html::encode($this->title) ?></span></h1>
                    <!--<h3 class="welcome-sub-text">Your performance summary this week </h3>-->
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">

                <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                    <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="<?php echo Url::base();?>/template/images/faces/face8.jpg" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="<?php echo Url::base();?>/template/images/faces/face8.jpg" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                            <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                        </div>

                        <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Salir</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->


    <div class="container-fluid page-body-wrapper">


        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">


            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Url::to(['/site/principal']);?>">
                        <i class="mdi mdi-grid-large menu-icon"></i>
                        <span class="menu-title">Principal</span>
                    </a>
                </li>
                <!--<li class="nav-item nav-category">Conveyor</li>-->
                <li class="nav-item">

                    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="menu-icon mdi mdi-floor-plan"></i>
                        <span class="menu-title">Conveyor</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor1']);?>">1.- Modelos y alertas</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor2']);?>">2.- Prescriptivo</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?php echo Url::to(['/site/conveyor3']);?>">3.- Todas las variables</a></li>
                        </ul>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- partial -->


        <?= Alert::widget() ?>
        <?= $content ?>

    </div>

    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <!--<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>-->
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- page-body-wrapper ends -->
</div>





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
