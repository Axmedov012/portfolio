<?php

namespace frontend\controllers;

use frontend\models\Validator;
use yii\web\Controller;

class ValidatorController extends Controller
{
    public function actionIndex()
    {
        $model = new Validator();
        if (\Yii::$app->request->isPost) {
            $data = \Yii::$app->request->post();
            $model->malumot_1 = $data['malumot_1'];
            $model->malumot_2 = $data['malumot_2'];
            if ($model->validate()) {
                \Yii::$app->session->setFlash('success', 'Validatsiyadan otdi');
            }
        }
        return $this->render('index', ['model' => $model]);
    }
}
