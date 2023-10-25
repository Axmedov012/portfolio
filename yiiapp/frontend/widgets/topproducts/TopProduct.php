<?php
// widget lar
namespace frontend\widgets\topproducts;

use common\models\Product;
use yii\base\Widget;

class TopProduct extends Widget
{
    public $firstName = "test";
    public function run()
    {
        $model = Product::find()->all();
        TopProductAssets::register($this->view);
            return $this->render('topproduct',['model'=>$model]);
    }
}