<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use \frontend\models\Category;
use \frontend\models\SubCategory;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<hr>
 <div class="row-fluid">

<div class="span12">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Product Info</h5>
        </div>
        <div class="widget-content nopadding">

            <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal','enctype' => 'multipart/form-data']]); ?>

            <?php
           // echo Html::activeDropDownList($model, 'category_id', ArrayHelper::map(Category::find()->all(), 'id', 'category'))
            ?>
             <?= $form->field($model, 'name', ['template' => '
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Product Name</label>
<div class="controls">{input}{error}</div>'])->textInput(['maxlength' => true, 'class' => 'span4', 'placeholder' => 'Product Name']) ?>

             <?= $form->field($model, 'description', ['template' => '
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Product Description</label>
<div class="controls">{input}{error}</div>'])->textArea(['raws'=>5,  'class' => 'span4', 'placeholder' => 'Product Desciption']) ?>

<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;"> Product Category</label>
<div class="controls">  <?php
echo Html::activeDropDownList($model, 'category',
      ArrayHelper::map(Category::find()->all(), 'category', 'category')) ?></div>


<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;"> Product Sub Category</label>
<div class="controls">  <?php
echo Html::activeDropDownList($model, 'sub_category',
      ArrayHelper::map(SubCategory::find()->all(), 'sub_category', 'sub_category')) ?></div>

      <?= $form->field($model, 'imageFile',['template' => '
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Product Image</label>
<div class="controls">{input}{error}</div>'])->fileInput() ?>    
            <div class="form-actions">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div></div></div></div>
