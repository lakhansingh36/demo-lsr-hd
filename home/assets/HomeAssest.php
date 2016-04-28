<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace home\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HomeAssest extends AssetBundle
{
   public $basePath = '@webroot';
    public $baseUrl = 'home-theme';
    public $css = [
	    'css/ionicons.min.css',
'css/bootstrap.min.css',
'css/custom-orange.css',
'css/custom-gold.css',
'css/hint.css',
'css/bootstrap-select.min.css',
'css/jquery.simplecolorpicker.css',
'font-awesome/css/font-awesome.css',

'css/animate.css',
        



        
    ];
    public $js = [
	'js/jquery.min.js',
	'js/custom.js',
	'js/style-switcher.js',
        'js/switches.js',
	'js/slick.js',
	'js/wow.min.js',
        'js/bootstrap.min.js',
	'js/jquery.highlight.js',
	'js/jquery.touchSwipe.min.js',
        'js/line.js',
	'js/nicescroll.js',
'js/jquery.nicescroll.plus.js',
'js/countdown.js' ,
'js/jquery.simplecolorpicker.js',
'js/jquery.zoom.js',
'js/to-top.js',
'js/jquery.charactercounter.js',
'js/bootstrap-select.min.js',
'js/bootstrap-slider.js' ,
'js/jquery.particleground.js',
'js/salvattore.js', 
'js/bootstrap-tabcollapse.js'  

	

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
