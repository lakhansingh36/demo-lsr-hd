<?php

namespace home\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class CategoryController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
         $searchModel = new \frontend\models\ProductSearch;
        $dataProvider = $searchModel->searchCategory($id);


        $this->view->title = 'Home Decor';
        return $this->render('index', ['listDataProvider' => $dataProvider , 'category'=>$id]);
      
    }

}
