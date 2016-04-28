<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Branc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="branc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'brancName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brancCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
