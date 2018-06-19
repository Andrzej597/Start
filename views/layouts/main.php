<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use lajax\languagepicker\widgets\LanguagePicker;
use app\widgets\multiLangD\MultiLang;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


    <header>
        <section class="back">
        <div id="container" class="triangle-container">
            <div id="output" class="">
            </div>


        </div>
        <div id="controls" class="" style="display: none;">
        </div>

        <?php
            echo"<script language='javascript' src=\"../js/Triangle.js\"></script>";
            ?>

        </section>
        <div class="navigation-top fixed-top">
            <div class="container-fluid">
    <?php    Yii::$app->user->isGuest ? (
                $endDiv = Yii::t('app','User Account')
            ) : (
                $endDiv = Yii::$app->user->identity->username
            );


    NavBar::begin([
        'brandLabel' => '<img src="../img/logo/logo-SCI.png"; class="logo">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg',
            'style' => 'background-color: inherit; position: absolut; right: 0;'

        ]
    ]);

    echo Nav::widget([
        'options' => ['class' => ' col-sm-12 col-md-9 navbar navbar-expand-lg navbar-nav collapse nav-wid text-center','id'=>'navigation',
            'style' => ' font-size: 15px; '],
        'items' => array(
            array('label' => Yii::t('app', 'About us'), 'url' => ('#content')),
            array('label' => Yii::t('app', 'Products'), 'url' => ('#products')),
            array('label' =>  Yii::t('app', 'Advantages'), 'url' => ('#advantages')),
            array('label' =>  Yii::t('app', 'Reporting'), 'url' => ('#reporting')),
            array('label' => Yii::t('app', 'Questions'), 'url' => ('#questions')),
            array('label' => Yii::t('app', 'News'), 'url' => ('#news')),
            array('label' => Yii::t('app', 'Cooperation'), 'url' => ('#cooperation')),
        )]);
?>
<div class="col-md-3 text-lg-right text-nowrap" style="text-align: center;">
    <?php
    echo MultiLang::widget([
        'cssClass'=>'col-sm-12 col-md-8 text-center navbar-nav navbar navbar-expand-lg language  '
    ]);

   echo Button::widget([
            'label' => $endDiv,
            'options' => ['class' => 'btn btn-outline-success btn-personal-area',
            'style' => 'margin-left: 15px; color: #fff; border: 2px solid #27AE60; border-radius:4px;',
        "data-toggle"=>"modal", "data-target"=>"#signup", "data-dismiss"=>"signin"],
        ]);
    ?>
    ?>
</div>
        <?php
    NavBar::end();
    ?>

    </div>
    </div>
    </header>
<div class="wrap">
    <div class="container">

        <?= $content ?>


    </div>
</div>

<footer class="footer" style="width: 100%; background-color: #000000; margin-top: 25px; padding: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="left">
                <?php
                echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"logo-footer\" style=\"width: 80px; display: flex; vertical-align: middle;\">";
                ?>
                </div>
            </div>
                <div class="col-8 d-flex justify-content-end">
                <a href="https://t.me/SCI_Crypto_NEWS" target="_blank"><img src="../img/footer/telegram.png"; class="telegram" style="width : 37px; height: 37px; border-radius: 50%; margin: 0 3px;">
                </a>
                <a href="https://www.instagram.com/smart.crypto.invest/" target="_blank"><img src="../img/footer/instagram.png"; class="instagram" style="width : 37px; height: 37px; border-radius: 50%; margin: 0 3px;">
                </a>


            </div>
        </div>


    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
