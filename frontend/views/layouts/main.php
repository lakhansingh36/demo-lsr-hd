<?php
/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\DashboardAssest;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

DashboardAssest::register($this);
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
    <body class="hold-transition skin-blue sidebar-mini">
        <?php $this->beginBody() ?>

        <div class="wrapper">
            <?php /* ?><?php
              NavBar::begin([
              'brandLabel' => 'My Company',
              'brandUrl' => Yii::$app->homeUrl,
              'options' => [
              'class' => 'navbar-inverse navbar-fixed-top',
              ],
              ]);
              $menuItems = [
              ['label' => 'Home', 'url' => ['/site/index']],
              ];
              if (Yii::$app->user->isGuest) {
              $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
              } else {
              $menuItems[] = [
              'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
              'url' => ['/site/logout'],
              'linkOptions' => ['data-method' => 'post']
              ];
              }
              echo Nav::widget([
              'options' => ['class' => 'navbar-nav navbar-right'],
              'items' => $menuItems,
              ]);
              NavBar::end();
              ?>
              <?php */ ?>




            <div id="header">
                <h1><a href="#">Home Decorz Admin</a></h1>
            </div>

            <div id="user-nav" class="navbar navbar-inverse">
                <ul class="nav">
                    <li><a href="#"><i class="icon-user"></i>&nbsp;My Profile</a></li>
                    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">&nbsp;Settings</span></a></li>
                    <li class=""><a title="" href="<?php echo 'index.php?r=site/logout' ?>" ><i class="icon icon-share-alt"></i> <span class="text">&nbsp;Logout  <?php //echo Yii::$app->user->identity->username; ?></span></a></li>
                </ul>
            </div>
            <div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
                <ul>
                    <li class="<?php echo isset($this->params['menu']['dashboard']) ? 'active' : ''; ?>"><a href="<?php echo "index.php?r=site/index"; ?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
                    <li class="submenu <?php echo isset($this->params['menu']['category'])  ? 'open' : ''; ?>"> <a href="#"><i class="icon icon-info-sign"></i> <span>Categories</span> </a>
                        <ul>
                            <li class="<?php echo isset($this->params['sub-menu']['cc']) ? 'active' : ''; ?>"><a href="<?php echo "index.php?r=category/create"; ?>">Add Categories</a></li>
                            <li class="<?php echo isset($this->params['sub-menu']['c']) ? 'active' : ''; ?>"><a href="<?php echo "index.php?r=category/index"; ?>">All Categories</a></li>
                        </ul>
                    </li>
                    <li class="submenu <?php echo isset($this->params['menu']['sub-category'])  ? 'open' : ''; ?>"> <a href="#"><i class="icon icon-info-sign"></i> <span>Sub Categories</span> </a>
                        <ul>
                            <li class="<?php echo isset($this->params['sub-menu']['sc']) ? 'active' : ''; ?>"><a href="<?php echo "index.php?r=sub-category/create"; ?>">Add Sub Categories</a></li>
                            <li class="<?php echo isset($this->params['sub-menu']['s']) ? 'active' : ''; ?>"><a href="<?php echo "index.php?r=sub-category/index"; ?>">All Sub Categories</a></li>
                        </ul>
                    </li>
                    <li class="submenu <?php echo isset($this->params['menu']['product'])  ? 'open' : ''; ?>"> <a href="#"><i class="icon icon-fullscreen"></i><span>Products</span> </a>
                        <ul>
                            <li class="<?php echo isset($this->params['sub-menu']['pc']) ? 'active' : ''; ?>"><a href="<?php echo "index.php?r=product/create"; ?>">Add Products</a></li>
                            <li class="<?php echo isset($this->params['sub-menu']['p'])  ? 'active' : ''; ?>"><a href="<?php echo "index.php?r=product/index"; ?>">All Products</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-th"></i> <span>Tables</span></a></li>
                </ul>
            </div>  
            <div id="content">
                <div id="content-header">
                    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
                    <h1><?php echo $this->title;?></h1>
                </div>


                <!--Action boxes-->
                <div class="container-fluid">

                    <?= $content ?>

                    <div class="row-fluid">
                        <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
                    </div>
                    <?php $this->endBody() ?>
                    </body>
                    </html>
                    <?php $this->endPage() ?>
