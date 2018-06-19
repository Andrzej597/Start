<?php

/* @var $this yii\web\View */

use yii\bootstrap\Button;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'Smart Crypto Invest';
?>
<?php
echo"<style>
body{
  height: 100vh;
  display:flex;
  align-items: center;
  background-image: url("../img/signin/signin_bg.png"); /*ВОТ ЭТУ ЛИНКУ ЛУЧШЕ ПРОВЕРИТЬ*/
  background-repeat: no-repeat;
  background-size: 100%;
}
p{
  margin-bottom: 40px;
  margin-top: 10px;
}
a{
  width: 290px !important;
}
.btn-recover2{
  background-color: rgba(39, 174, 96, 0.44);
  border-color: #27AE60;
  color:white;
}</style>"
?>
<!-- ЮЛЯ, ПРОСТИ ПОЖАЛУЙСТА. Я ВЫРУБАЮСЬ -->
<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
  <img src="img/logo-SCI.png" alt="logo">
  <div class="text-center text-white">
    <p>Smart Crypto Invest</p>
  </div>

  <!-- ЮЛЯ, 2 ЧАСА НОЧИ, Я НЕ ЗНАЮ, ЧТО С ЭТИМИ ЛИНКАМИ ДЕЛАТЬ -->
  <a class="btn btn-outline-success btn-recover2" href="#">
   <?=Yii::t('app','The recovery instructions')?><br /><?=Yii::t('app','is sent to your e-mail')?>
  </a>
</div>
