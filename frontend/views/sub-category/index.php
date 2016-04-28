<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SubCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sub Categories';
$this->params['breadcrumbs'][] = $this->title;
$this->params['menu']['sub-category']=true;
$this->params['sub-menu']['s']=true;
?>
<hr>
<div class="row-fluid">
<div class="span12">
    <p class="pull-left">
        <?= Html::a('Create Sub-Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="widget-box">
    
<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
<h5>All Sub Categories</h5> 
</div>
<div class="widget-content nopadding">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   

   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'sub_category',
            ['label'=>'Product Category','attribute'=>'category_id','value'=>function($data){return \frontend\models\Category::CategoryById($data->category_id);}],
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div></div></div></div>
