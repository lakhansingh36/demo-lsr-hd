<?php

namespace home\controllers;

class BestSellerController extends \yii\web\Controller
{
    public function actionIndex()
    {
         $searchModel = new \frontend\models\ProductSearch;
        $dataProvider = $searchModel->searchBestSeller();


        $this->view->title = 'Home Decor';
        return $this->render('index', ['listDataProvider' => $dataProvider ]);
    }

}
