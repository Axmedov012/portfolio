<?php

namespace frontend\controllers;

use yii\db\Query;
use yii\web\Controller;

class DatabuilderController extends Controller
{
    public function actionIndex()
    {
        $query = new Query();
        $row = $query
            ->select
            ('*')
            -> from('person');
        //    ->where(['id'=>2,'email'=>'doniyor1012@gmail.com']);   //where id=2 AND email=doniyor1012@gmail.com
        //and or in not in between like

        //where ( id = 1 OR id = 2 ) AND  email = doniyor@gmail.com
      //  $query->where(['and','email = "doniyor1012@gamil.com" ', ['or','id=1','id=2']]);

        // where NOT id = 2
      //  $query->where('not','id=2');

        // where NOT (( id = 1 ) AND ( email  = "doniyor@gmil.com" ))
       // $query->where(['not',['id'=>1, 'email'=>"doniyor@gmail.com"]]);

        // where id between 1 and 10  id 1 va 10 orasidagi malumotlarni olib chiqsin
      //  $query->where('between','id', 1,10);

        //where id in (1,2,3,4)  //id 1,2,3,4 orasida bor yoki yo'q ligini aniqlaydi
        // $query->where('in','id',[1,2,3,4]);

        //where email like '%don'
      //  $query->where('like','email','%don',false);

        //where yoshi >30
       // $query->where('>','age',10);

        //andWhere()  va  orWhere
        //where status = 1   xammasi chiqadi
        //where status = 1 and  title like '%kitob%'
//        $query->where(['status'=>1]);
//        if (!empty($search_word)){
//            $query->andWhere(['like','title',$search_word]);  //where status = 1 and  title like '%kitob%'
//        }
//
        //ORDER BY ID ASC
      //  $query->orderBy(['id'=>SORT_ASC, 'email'=>SORT_DESC]);  //order by massiv ko'rinishi

       //GROUP BY
       // $query->groupBy('id','email');

        //LIMIT
       // $query->limit(10)->offset(10);

        // JOIN
       // $query->join('left','person','person.categoryid = category_id');

       // $query->innerJoin('person','shart');



echo "<pre>";
        print_r($row);

    }
}