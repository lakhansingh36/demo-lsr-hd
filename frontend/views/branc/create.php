<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Branc */

$this->title = 'Create Branc';
$this->params['breadcrumbs'][] = ['label' => 'Brancs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="branc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
