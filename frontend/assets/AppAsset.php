<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        // '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
        '//fonts.googleapis.com/css?family=Roboto+Condensed',
        '//fonts.googleapis.com/css?family=ABeeZee',
        '//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
        '//fonts.googleapis.com/css?family=Cabin:700',
        '//use.fontawesome.com/releases/v5.12.0/css/all.css',
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        'fonts/font-awesome.min.css',

        'css/css-devices.css',
        'css/site.css',
        'css/Video-Parallax-Background-v3.css',
        'css/fake-browser.css',
    ];
    public $js = [
        'js/Video-Parallax-Background-v3.js',
        'js/bootstrap.min.js',
        'js/matrix.js',
        'js/grayscale.js',
        'js/fake-browser.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
