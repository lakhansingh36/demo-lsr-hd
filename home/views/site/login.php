<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
            <?php $form = ActiveForm::begin(['id' => 'loginform' , 'class'=>'form-vertical']); ?>

                <?= $form->field($model, 'username' , ['template' => '<div class="control-group">
 <div class="controls">
 <div class="main_input_box">
 <span class="add-on bg_lg"><i class="icon-user"></i></span>{input}</div></div></div>'])->textInput(['placeholder'=>'Enter user name']) ?>

                <?= $form->field($model, 'password', ['template' => '<div class="control-group">
 <div class="controls">
 <div class="main_input_box">
 <span class="add-on bg_lg"><i class="icon-lock"></i></span>{input}</div></div></div>'])->passwordInput(['placeholder'=>'Enter password']) ?>

                

              

                <div class="form-actions">
                    <span class="pull-right">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-success', 'name' => 'login-button']) ?>
                    </span>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                </div>
  <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>

            <?php ActiveForm::end(); ?>
