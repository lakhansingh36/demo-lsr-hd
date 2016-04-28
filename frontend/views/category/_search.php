<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>


    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

 <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">

    <?= $form->field($model, 'category') ?>
 </div>
   <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
   </div><div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>


