<?php

namespace frontend\controllers;

use frontend\models\Person;
use yii\web\Controller;

class PersonController extends Controller
{
    public function actionForm()
    {
        $model = new Person();
        if ($model->load(\Yii::$app->request->post()) ) {  ?> <br><br><br><br><?php

            if ($model->validate() && $model->save()){
                \Yii::$app->session->setFlash('success','bazaga yozildi');
            }
            return $this->render('form', ['model' => $model]);
        } else {
            // Sahifaga kirilgan holatda yoki hato mavjud bo'ganida
            return $this->render('form', ['model' => $model]);
        }

    }
}