<?php
// widgetlar
namespace frontend\widgets\topproducts;

use yii\web\AssetBundle;

class TopProductAssets extends AssetBundle
{
    //frontend/widget/topproducts  dir turgan joy
    public $sourcePath = __DIR__."/assets"; // $sourcePath   js va css ni topish uchun ishlatiladi
    public $css = [
        'css/topproduct.css',
    ];

    public $js = [
        'js/topproduct.js'
    ];

    public $publishOptions = [
        'forceCopy'=>YII_DEBUG // css js bilan ishlaganda 1ta yangilasak css va js ham yangilanadi
    ];
}