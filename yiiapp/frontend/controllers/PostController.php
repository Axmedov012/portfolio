<?php

namespace frontend\controllers;

use yii\web\Controller;

class PostController extends Controller
{
    public $defaultAction = 'index';
  public function actionSalom()
   {
    return $this->render('salom');
   }
    public function actionIndex()
    {
        $telegram = "@doniyor1012";
        $massiv = ['doniyor','axmedov','junior','developer'];
        return $this->render('index',['telegram'=>$telegram ,'massiv'=>$massiv]);
    }
}