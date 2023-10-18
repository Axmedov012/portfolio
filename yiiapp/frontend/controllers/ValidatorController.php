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
          $model->load(\Yii::$app->request->post());

            if ($model->validate()) {
                \Yii::$app->session->setFlash('danger', 'Validatsiyadan otdi');
            }
        }
        return $this->render('index', ['model' => $model]);
    }
}

