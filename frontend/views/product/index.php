<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
$this->params['menu']['product']=true;
$this->params['sub-menu']['p']=true;
?>
<hr>
<div class="row-fluid">
<div class="span12">
    <p class="pull-left">
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<div class="widget-box">
    
<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
<h5>All Products</h5> 
</div>
<div class="widget-content nopadding">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   

   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           
            'name',
            'description:ntext',
            ['label'=>'Product Category','attribute'=>'category','value'=>function($data){return \frontend\models\Category::CategoryById($data->category);}],
          ['label'=>'Product Sub Category','attribute'=>'sub_category','value'=>function($data){return \frontend\models\SubCategory::SubCategoryById($data->sub_category);}],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
</div></div></div>