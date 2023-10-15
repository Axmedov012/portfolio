<?php

namespace frontend\controllers;

use frontend\models\Malumot;
use frontend\models\MyContact;
use yii\web\Controller;

class PostController extends Controller
{
 public $defaultAction = 'salom';
  public function actionSalom()
   {
      $malumot = new Malumot();
    if (\YII::$app->request->isPost){
       $formdata = (\Yii::$app->request->post());
       $malumot->malumot_1 = $formdata['malumot_1'];
        $malumot->malumot_2 = $formdata['malumot_2'];
       if ($malumot->validate()){
           \Yii::$app->session->setFlash('danger','validatsiyadan otdi');
       }
    }
    return $this->render('salom',['malumot' => $malumot]);
   }
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