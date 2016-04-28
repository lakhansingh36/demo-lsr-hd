<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\LoginAssest;
use yii\helpers\Html;


LoginAssest::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>
    <div class="clearfix">   </div>
    <section class="box">
 <div id="loginbox"> 
  <?= $content ?>
 </div>
    </section>
 
    <div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>
	  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
