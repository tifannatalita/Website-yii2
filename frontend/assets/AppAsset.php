<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath = '@bower/Furnish';
    public $css = [
        'assets/images/favicon.png',
        'assets/css/bootstrap.min.css',
        'assets/css/animate.css',
        'assets/css/magnific-popup.css',
        'assets/css/slick.css',
        'assets/css/LineIcons.css',
        'assets/css/default.css',
        'assets/css/style.css',
        'assets/css/responsive.css',
    ];
    public $js = [
        'assets/js/vendor/modernizr-3.6.0.min.js',
        'assets/js/vendor/jquery-1.12.4.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/slick.min.js',
        'assets/js/jquery.magnific-popup.min.js',
        'assets/js/jquery.nav.js',
        'assets/js/jquery.nice-number.min.js',
        'assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
