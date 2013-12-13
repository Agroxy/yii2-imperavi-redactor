<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\imperavi;
use yii\web\AssetBundle;

/**
 * @author Alexander Yaremchuk <alwex10@gmail.com>
 * @since 1.0
 */
class FontColorImperaviRedactorPluginAsset extends AssetBundle
{
    public $sourcePath = '@yii/imperavi-redactor/assets/plugins/fontcolor';
    public $js = [
        'fontcolor.js',
    ];
    public $css = [

    ];
    public $depends = [
        'yii\imperavi-redactor\ImperaviRedactorAsset'
    ];
}