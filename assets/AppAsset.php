<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
	     'css/bootstrap.min.css',
		 'css/matrix-login.css',
		 'css/matrix-media.css',
		 'css/matrix-style.css',
		 'css/matrix-media.css',
		 'plugins/iCheck/flat/blue.css',
		 
        'css/site.css',
    ];
    public $js = [
	'js/bootstrap.min.js',
	'js/app.min.js',
	'js/dashboard.js',
	'plugins/jquery.sparkline.min.js',
	'plugins/jquery.slimscroll.min.js',
	'plugins/fastclick.min.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
