<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Branc */

$this->title = 'Update Branc: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Brancs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="branc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
