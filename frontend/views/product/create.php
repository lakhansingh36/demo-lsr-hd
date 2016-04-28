<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Product */

$this->title = 'Create Product';
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['menu']['product']=true;
$this->params['sub-menu']['pc']=true;
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
