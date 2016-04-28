<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Category */

$this->title = 'Create Category';
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['menu']['category']=true;
$this->params['sub-menu']['cc']=true;
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
