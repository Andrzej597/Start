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
  background-image: url("../img/signin/signin_bg.png");
  background-repeat: no-repeat;
  background-size: 100%;
}
p{
  margin-bottom: 40px;
  margin-top: 10px;
}
input, a{
  width: 290px !important;
}
.data{
  background-color:#1B2435;
  border-radius: 4px;
  border-color: #3B4451;
  margin-top: 10px;
  margin-bottom: 10px;
}
.button-signin{
  background: linear-gradient(to bottom, #05AB5B, #05AB5B);
}</style>"
?>
<!-- ЮЛЯ, ПРОСТИ ПОЖАЛУЙСТА. Я ВЫРУБАЮСЬ -->
 <?php $form = ActiveForm::begin(['id' => 'form-signin']); ?>
                <?= $form->field($model, 'Username')textInput(['autofocus' => true]) ?> ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
<div class="container-fluid d-flex flex-column justify-content-center align-items-center">
  <?php
    echo"<img src=\"../img/logo/logo-SCI.png\"; class=\"analis\">";
   ?>
  <div class="text-center text-white">
    <p>Smart Crypto Invest</p>
  </div>
  <input class="data form-control" type="text" placeholder="E-mail" />
  <input class="data form-control" type="text" placeholder=<?=Yii::t('app','Password')?> />

  <!-- ЮЛЯ, 2 ЧАСА НОЧИ, Я НЕ ЗНАЮ, ЧТО С ЭТИМИ ЛИНКАМИ ДЕЛАТЬ -->
  <a class="btn button-signin text-white" href="#" style="margin-bottom:40px; margin-top: 10px;">
    <?=Yii::t('app','Sign in')?>
  </a>
  <a class="btn text-white" href="#">
      <?=Yii::t('app','Do not have an account?')?>
  </a>
  <a class="btn btn-outline-success" href="#">
      <?=Yii::t('app','Sign up')?>
  </a>
</div>
<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>
    <div class="row">
        <div class="col-lg-5">
 
           
 
        </div>
    </div>
</div>
