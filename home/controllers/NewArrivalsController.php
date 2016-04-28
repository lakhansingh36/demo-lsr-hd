<?php

namespace home\controllers;

class NewArrivalsController extends \yii\web\Controller
{
    public function actionIndex()
    {
         $searchModel = new \frontend\models\ProductSearch;
        $dataProvider = $searchModel->searchNewArrivals();


        $this->view->title = 'Home Decor';
        return $this->render('index', ['listDataProvider' => $dataProvider ]);
    }

}
