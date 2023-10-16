<?php

namespace frontend\controllers;

use frontend\models\MyContact;
use yii\web\Controller;

class PostController extends Controller
{
    public $defaultAction = 'index';
    public function actionIndex()
    {
        $telegram = "@doniyor1012";
        $massiv = ['doniyor','axmedov','junior','developer'];
        return $this->render('index',['telegram'=>$telegram ,'massiv'=>$massiv]);
    }

    public function actionMyContact()
    {
       $model = new MyContact();
       $model->email = 'doniyor@1012';
       $model->name = 'doniyor';
       if ($model->validate())
       {
       echo "Validatsiyadan o'tdi" ;
       }else{
    print_r($model->errors);    }
    }
}