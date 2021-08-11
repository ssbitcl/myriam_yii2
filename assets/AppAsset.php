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
        //'css/site.css',
        'template/vendors/feather/feather.css',
        'template/vendors/mdi/css/materialdesignicons.min.css',
        'template/vendors/ti-icons/css/themify-icons.css',
        'template/vendors/typicons/typicons.css',
        'template/vendors/simple-line-icons/css/simple-line-icons.css',
        'template/vendors/css/vendor.bundle.base.css',
        'template/js/select.dataTables.min.css',
        'template/css/style.css?v=3',

    ];


    public $js = [
        'template/vendors/js/vendor.bundle.base.js',
        'template/vendors/chart.js/Chart.min.js',
        'template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js',
        'template/vendors/progressbar.js/progressbar.min.js',
        'template/js/off-canvas.js',
        'template/js/hoverable-collapse.js',
        'template/js/template.js?v=2',

        'template/js/conveyor1.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}