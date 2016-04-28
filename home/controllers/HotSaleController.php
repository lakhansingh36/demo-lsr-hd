<?php

namespace home\controllers;

class HotSaleController extends \yii\web\Controller
{
    public function actionIndex()
    {
         $searchModel = new \frontend\models\ProductSearch;
        $dataProvider = $searchModel->searchHotSale();


        $this->view->title = 'Home Decor';
        return $this->render('index', ['listDataProvider' => $dataProvider ]);
    }

}
