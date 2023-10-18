<?php

namespace frontend\controllers;

use yii\web\Controller;

class DsnController extends Controller
{
    public function actionIndex()
    {
        $sql = "update person set gender = 'ayol' where name='momin' ";

        $command = \Yii::$app->db->createCommand()
            ->batchInsert('person',['name','email','gender'],
                [
                    ['nodir','nodir012@gmail.com','erkak'],
                    ['temur','temur012@gmail.com' , 'erkak'],
                    ['nilufar','nilufar012@gmail.com','ayol'],
               ])
            ->execute();

        return $this->render("index");
    }
}