<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css',
        'css/advanteges.css',
        'css/news.css',
        'css/index.css',
        'css/animate.css'
    ];
    public $js = [
        'js/Chart.min.js',
<<<<<<< HEAD
        'js/wow.min.js'
=======
        'js/wow.min.js',

>>>>>>> 225243b8395fef5a4de64cec1700302d7f607a01
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
