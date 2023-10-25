<?php
//relation  jadvallarni bog'lash

namespace frontend\controllers;

use common\models\Client;
use yii\web\Controller;

class ProfileController extends Controller
{
    public function actionIndex()
    {
        $model = Client::find()->all();

        return $this->render('index',['model' => $model]);
    }
}