<?php
//active  record
namespace frontend\controllers;

use common\models\Record;
use yii\db\Query;
use yii\db\StaleObjectException;
use yii\web\Controller;

class ActiveController extends Controller
{
    /**
     * @throws \Throwable
     * @throws StaleObjectException
     */
    public function actionIndex()
    {

    //    $person = Record::find()->one();
        // id = 2 bo'lagan Persondagi malumotlarni qaytaradi
        // SELECT * FROM `person` WHERE `id` = 3
    //  $person  = Record:: findOne(3);

        // SELECT * FROM `person` WHERE `id` = 15 AND `email` = 'email@email.uz';
//        $person = Record:: findOne([
//          'id' => 15,
//        'email' => 'lola012@gmail.com' ,
//          ]);

        //  id 15 16 17 18 larga teng bo'lganlarni qaytaradi
        // SELECT * FROM `person` WHERE `id` IN (15, 16, 17, 18)
     //  $person = Record:: findAll([ 15,16,17,18]);

        // eamil shumday bo'lganlarni qaytaradi
        // SELECT * FROM `person` WHERE `status` = 0
      //  $person = Record:: findAll ([ 'email' => 'doniyor@1012gmail.com' ]);

       // return $this->render('index',['person'=>$person]);

                         //activequery

       // $user_query = (new Query())->from('person')->one();
        //   $user_query = (new Query())->from('person')->all();
        //   $user_query = (new Query())->from('person')->count();
        //   $user_query = (new Query())->from('person')->sum();
        //   $user_query = (new Query())->from('person')->average();
        //   $user_query = (new Query())->from('person')->min();
        //   $user_query = (new Query())->from('person')->max();
        //   $user_query = (new Query())->from('person')->scalar();
        //   $user_query = (new Query())->from('person')->exists();


     //   $user = Record::find()->one(); //Query dagi malumotlar Active Record da ham bor

       // return $this->render('index',['user_ar'=>$user,'user_q'=>$user_query]);

//                //qidirish
//   $email = 'jamshid@1012gmail.com';
//      $sql = "SELECT * FROM person where email = :email";
//        $person = Record::findBySql( $sql,[':email'=>$email])->asArray()->all();
//          return $this->render('index',['person'=>$person]);

          //Bazadagi malumotlarni yangilash
//        $cumtomer =Record::findOne(['id'=> 2]);
//        $cumtomer->email = 'email@11.uz';
//        $cumtomer->save();

        //Bazaga malumot yozish
//        $custom = new Record();
//        $custom->name = 'zafar';
//        $custom->email = 'zafar123@.uz';
//        $custom->save();

            //  Bazadan malumot o'chirish  // daleteAll xamma malumotni o'chiradi
//        $delete = Record::findOne(24);
//        $delete->delete();

        $after = Record::find()->where(['id'=>4])->one();
        return $this->render('index',['person'=>$after]);
    }
    public function actionAdd()
    {
        $active = new Record();
       if ($active->load(\Yii::$app->request->post())){
           if ($active->save()){
               \Yii::$app->session->setFlash('success','qoshildi');
               $this->redirect('index');
           }
       }
       return $this->render('create',['model'=>$active]);
    }
}