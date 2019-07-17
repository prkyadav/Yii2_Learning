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
        'css/site.css',
    ];
    public $js = [
		'js/jquery.min.js',
		'js/bootstrap.min.js',
		'js/script.js',
		'js/owl.carousel.min.js',
		'js/chosen.jquery.min.js',
		
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
		'position' => \yii\web\View::POS_HEAD
	);
}


