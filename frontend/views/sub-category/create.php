<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SubCategory */

$this->title = 'Create Sub Category';
$this->params['breadcrumbs'][] = ['label' => 'Sub Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['menu']['sub-category']=true;
$this->params['sub-menu']['sc']=true;
?>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


