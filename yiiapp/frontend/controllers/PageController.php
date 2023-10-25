<?php
// pagination
namespace frontend\controllers;

use frontend\models\Page;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\data\Sort;
use yii\web\Controller;

class PageController extends Controller
{
    public function actionIndex()
    {
        $query = Page::find();
        $count = $query->count();
        $pagination = new Pagination([
            'totalCount'=>$count,
            'pageSize'=>5,
        ]);

        $sort = new Sort([
            'attributes' => [
              'name',
              'email',
            ],
        ]);
        $model = $query
            ->orderBy($sort->orders)
            ->limit($pagination->limit)
            ->offset($pagination->offset)
            ->all();


        return $this->render('index',
            ['pagination'=>$pagination,
             'model'=>$model,
             'sort'=>$sort,
            ]);
    }

    // data provider
    public function actionDataprovider()
    {
        // yangi ActiveRecord Hosil qildik
        $query = Page::find();

            // Data Provider yasadik
        $provider = new ActiveDataProvider([
            'query' => $query,   // active record dan query chaqirdik
//            'pageSize' => 5,     // sahifada nechta malumot korsatilishini aniqladik
        ]);

        return $this->render('dataprovider', ['dataprovider' => $provider]);
    }

}

