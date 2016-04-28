<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
$this->params['menu']['category']=true;
$this->params['sub-menu']['c']=true;
?>
<hr>
<div class="row-fluid">
<div class="span12">
    <p class="pull-left">
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="widget-box">
    
<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
<h5>All Categories</h5> 
</div>
<div class="widget-content nopadding">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   

   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div></div></div></div>