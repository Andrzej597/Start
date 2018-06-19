<?php
namespace app\widgets\multiLangD;

use yii\helpers\Html;

class MultiLang extends \yii\bootstrap\Widget
{
    public $cssClass;
    public function init(){}

    public function run() {

        return $this->render('Views', [
            'cssClass' => $this->cssClass,
        ]);
    }
}