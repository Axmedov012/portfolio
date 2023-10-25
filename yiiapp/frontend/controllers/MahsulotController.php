<?php
//ListView
namespace frontend\controllers;

use common\models\Product;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class MahsulotController extends Controller
{
    public function actionIndex()
    {
        $data = new ActiveDataProvider([
            'query' => Product::find()
        ]);
        return $this->render('index', [
            'dataProvider' => $data,
            ]);
    }
}