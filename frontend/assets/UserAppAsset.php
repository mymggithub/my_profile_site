<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class UserAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap_u_ui.min.css',
		'//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
		'fonts/fontawesome-all.min.css',
        'fonts/font-awesome.min.css',
		'fonts/fontawesome5-overrides.min.css',
        '//kendo.cdn.telerik.com/2022.1.412/styles/kendo.default-ocean-blue.min.css',
        'css/site_ui.css',
    ];
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        '//kendo.cdn.telerik.com/2022.1.412/js/kendo.all.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/jszip/2.4.0/jszip.min.js',
        'js/bootstrap.min.js',
		'js/chart.min.js',
		'js/bs-init.js',
		'js/theme.js',
        'js/t.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
