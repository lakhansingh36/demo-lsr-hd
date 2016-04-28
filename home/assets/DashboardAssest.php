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
class DashboardAssest extends AssetBundle
{
   public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
	    'css/bootstrap.min.css',
'css/bootstrap-responsive.min.css',
'css/fullcalendar.css',
'css/matrix-style.css',
'css/matrix-media.css',
'font-awesome/css/font-awesome.css',

'css/jquery.gritter.css',
        



        
    ];
    public $js = [
	'js/excanvas.min.js',
	'js/jquery.min.js',
	'js/jquery.ui.custom.js',
        'js/bootstrap.min.js',
	'js/jquery.flot.min.js',
	'js/jquery.flot.resize.min.js',
        'js/jquery.peity.min.js',
	'js/matrix.js',
	'js/matrix.dashboard.js',
        'js/jquery.gritter.min.js',
	'js/jquery.validate.js',
	'js/matrix.form_validation.js',
        'js/jquery.wizard.js', 
'js/jquery.uniform.js', 
'js/select2.min.js', 
'js/matrix.popover.js', 
'js/jquery.dataTables.min.js', 
'js/matrix.tables.js', 

	

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
