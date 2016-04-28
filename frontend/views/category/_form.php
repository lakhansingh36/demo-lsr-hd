<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>
<hr>
 <div class="row-fluid">

<div class="span12">
    <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>Categories Info</h5>
        </div>
        <div class="widget-content nopadding">

            <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']]); ?>

            <?php
           // echo Html::activeDropDownList($model, 'category_id', ArrayHelper::map(Category::find()->all(), 'id', 'category'))
            ?>
          

            <?= $form->field($model, 'category', ['template' => '
<label class="control-label" style="text-align:left; padding-left:10px; font-size:12px;">Categories Name</label>
<div class="controls">{input}{error}</div>'])->textInput(['maxlength' => true, 'class' => 'span4', 'placeholder' => 'Category Name']) ?>

            <div class="form-actions">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div></div></div></div>
