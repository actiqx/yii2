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
        'css/material.css',
        'css/mdb.css'
    ];
    public $js = [
        'js/material.min.js',
        'js/material-dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'macgyer\yii2materializecss\assets\MaterializeAsset'
    ];
}
