<?php
/* @var $this \yii\web\View */
/* @var $content string */

use home\assets\HomeAssest;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

HomeAssest::register($this);
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

    <?php $this->beginBody() ?>
    <div class="top-sec">
        <nav class="navbar navbar-static-top line-navbar-one">
            <div class="container">
                <div class="navbar-header"> 
                    <button data-target="#line-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed ion-android-menu" type="button"> <span class="sr-only">Toggle navigation</span> <span class="fa fa-ellipsis-v"></span> </button>
                    <button class="lno-btn-toggle"> <span class="fa fa-bars"></span> </button>
                </div>

                <div class="row">
                    <div class="col-sm-4 welcome-msg hidden-xs">Welcome to our Home Decorz Store!!!</div>
                    <div id="line-navbar-collapse-1" class="col-sm-8 collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav top-menu">
                            <li><a href="compare-list.html">Compare list</a></li>
                            <li><a href="compare-list.html">Compare list</a></li>
                            <li><a href="mailto:rajeevrawat@gmail.com">rajeevrawat@gmail.com</a></li>
                            <li> <a class="btn btn-block btn-facebook" href="#"><i class="ion-social-facebook"></i></a> </li>
                            <li> <a class="btn btn-block btn-twitter" href="#"><i class="ion-social-twitter"></i></a></li>
                            <li> <a class="btn btn-block btn-google" href="#"><i class="ion-social-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="line-navbar-left lnl-hide">
            <p class="lnl-nav-title">Categories</p>
            <ul class="lnl-nav">
               
                <li>
                    <a data-subcategory="subcategory-furniture" aria-controls="collapseFurniture" aria-expanded="false" href="#collapseFurniture" data-toggle="collapse" class="collapsed">
                        <span class="lnl-link-text"></span><span class="fa fa-angle-up lnl-btn-sub-collapse"></span></a>
                    <ul data-subcategory="subcategory-furniture" id="collapseFurniture" class="lnl-sub-one collapse">
                        <li><a href="furniture-product.php">Bed</a></li>
                        <li><a href="#">Almirah / Armoires</a></li>
                        <li><a href="#">Chairs</a></li>
                        <li><a href="#">Benches</a></li>

                        <li><a href="#">Bookshelves / Cabinet</a></li>
                        <li><a href="#">Ottoman</a></li>
                        <li><a href="#">Consoles</a></li>
                        <li><a href="#">Trunks</a></li>

                        <li><a href="#">Swings</a></li>
                        <li><a href="#">Dining Tables</a></li>
                        <li><a href="#">Dressers/Mirrors</a></li>
                        <li><a href="#">Coffee Table</a></li>

                        <li><a href="#">Day Beds</a></li>
                        <li><a href="#">Buggies</a></li>
                        <li><a href="#">Rustic</a></li>
                    </ul></li>
                
                
            </ul>
        </div>
    </div>

    <header>
        <div class="container">
            <div class="row"> <!--start of logo-->
                <div class="col-sm-12 col-md-4 col-lg-3 "> <a href="index.php" class="navbar-brand"></a></div>
                <!--end of logo--> <!--start of features-->
                <div class="col-sm-12 col-md-8 col-lg-9 feature hidden-xs">
                    <div class="row">
                        <div class="col-sm-4 feature-box ion-chatbubble-working">
                            <dl  class="text-primary text-capitalize">
                                <dt>Online Support</dt>
                                <dd class="text-muted">24/7 Etiam ultricies nis</dd>
                            </dl>
                        </div>
                        <div class="col-sm-4 feature-box ion-android-sync">
                            <dl  class="text-primary text-capitalize">
                                <dt>30 Days Free Return</dt>
                                <dd class="text-muted">Nullam dictum felis eu pede </dd>
                            </dl>
                        </div>
                        <div class="col-sm-4 feature-box ion-lock-combination">
                            <dl  class="text-primary text-capitalize">
                                <dt>Payment Secured</dt>
                                <dd class="text-muted">Lorem ipsum dolor consecteure</dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <!--end of features--> 
            </div>
        </div>
    </header>
    <nav class="navbar navbar-default navbar-static-top line-navbar-two">
        <div class="container"> 
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="line-navbar-collapse-2">
                <ul class="nav navbar-nav lnt-nav-mega">
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="fa fa-dot-circle-o"></span> Products <span class="ion-android-arrow-dropdown"></span> </a>
                        <div class="dropdown-menu" role="menu">
                            <div class="lnt-dropdown-mega-menu"> 

                                <!-- List of categories -->
                                <ul class="lnt-category list-unstyled">
                                     <?php $cat_modell=  \frontend\models\Category::find()->all();
                foreach($cat_modell as $cat_model)
                {
                ?>
                                    <li class="active">
                                        <a href="#subcategory<?php echo $cat_model->id;?>">
                                            <?php echo $cat_model->category;?>
                                        </a>
                                    </li>
                <?php } ?>
                                </ul>


                                <!-- Subcategory and carousel wrap -->
                                <div class="lnt-subcategroy-carousel-wrap container-fluid">
                                    <!-- Sub categories list-->
                                    <?php foreach($cat_modell as $cat_modelll)
                                    {
                                        
                                        $sub_cat_model=  new \frontend\models\SubCategory();
                                       $sub_cat_model=$sub_cat_model->find()->where(['category_id'=>$cat_modelll->id])->all();
                                        ?>
                                    
                                    <div id="subcategory<?php echo $cat_modelll->id;?>"> 
                                        <!-- Furniture -->
                                        <div class="lnt-subcategory col-sm-12 col-md-12">
                                            <h3 class="lnt-category-name text-info text-uppercase"><a href="<?php echo "index.php?r=category/index&id=".$cat_modelll->category;?>"><?php echo $cat_modelll->category;?></a></h3>
                                            <ul class="list-unstyled col-sm-3">
                                                <?php 
                                                 foreach($sub_cat_model as $sub_cat_model)
                                        {
                                                     ?>
                                                <li><a href="<?php echo "index.php?r=sub-category/index&id=".$sub_cat_model->sub_category;?>"><?php echo $sub_cat_model->sub_category;?></a></li>
                                                
                                        <?php } ?>
                                            </ul>
                                           
                                        </div>
                                    </div>

                                        <?php } ?>


                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav main-nav">
                    <li class="active"><a href="index.php" class="ion-ios-home"></a></li>
                    <li><a href="<?php echo "index.php?r=new-arrivals";?>">NEW ARRIVALS</a></li>
                    <li><a href="<?php echo "index.php?r=best-seller";?>">BEST SELLER</a></li>
                    <li><span class="nav-span hot-sale">20% OFF</span><a href="<?php echo "index.php?r=hot-sale";?>">hot sale</a></li>
                    <li><a href="blog-standard.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
                <ul class="nav navbar-nav visible-xs">
                    <li><a href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <?= $content ?>
    <footer>
        <div class="footer-top wow fadeIn" data-wow-offset="10" data-wow-duration="2s"">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-sm-9">
                        <h4><i class="ion-android-phone-portrait icon text-info"></i><span class="text-uppercase text-primary">Royal Market - fashion & multi store HTML5 theme that fits your needs from webyzona</span></h4>
                    </div>
                    <div class="col-xs-4 col-sm-3"> <a href="#" class="btn btn-default btn-block hvr-underline-from-center-default pull-right">Download app</a> </div>
                </div>
            </div>
        </div>
        <div class="footer-middle wow fadeIn" data-wow-offset="40" data-wow-duration="2s">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3">
                        <h5 class="text-info text-uppercase">useful pages</h5>
                        <ul class="list-unstyled nudge">
                            <li><a href="text.html">About us</a> </li>
                            <li><a href="text-left.html">Terms and conditions</a> </li>
                            <li><a href="faqs.html">FAQ</a> </li>
                            <li><a href="contact.html">Contact us</a> </li>
                        </ul>
                        <hr>
                        <h5 class="text-info text-uppercase">User section</h5>
                        <ul class="list-unstyled nudge">
                            <li><a href="#">Login</a> </li>
                            <li><a href="register.html">Regiter</a> </li>
                        </ul>
                        <hr class="hidden-md hidden-lg hidden-sm">
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <h5 class="text-info text-uppercase">Men</h5>
                        <ul class="list-unstyled nudge">
                            <li><a href="#">T-shirts</a> </li>
                            <li><a href="#">Shirts</a> </li>
                            <li><a href="#">Accessories</a> </li>
                            <li><a href="#">Casual Dresses</a></li>
                            <li><a href="#">Apparel</a></li>
                            <li><a href="#">Jakets &amp; Coats</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                            <li><a href="#">Belts</a></li>
                            <li><a href="#">Blouses &amp; Shirts</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <h5 class="text-info text-uppercase">Women</h5>
                        <ul class="list-unstyled nudge">
                            <li><a href="#">Casual Dresses</a></li>
                            <li><a href="#">Apparel</a></li>
                            <li><a href="#">Jakets &amp; Coats</a></li>
                            <li><a href="#">Blouses &amp; Shirts</a></li>
                            <li><a href="#">Skirts</a></li>
                            <li><a href="#">Formal Shoes</a></li>
                            <li><a href="#">Jweelery</a></li>
                            <li><a href="#">Accessories</a> </li>
                            <li><a href="#">Casual Dresses</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <h5 class="text-info text-uppercase">juniors</h5>
                        <ul class="list-unstyled nudge">
                            <li><a href="#">Sunglassess</a> </li>
                            <li><a href="#">Sport Shoes</a> </li>
                            <li><a href="#">T-shirts</a> </li>
                            <li><a href="#">Skirts</a> </li>
                            <li><a href="#">Pants</a> </li>
                            <li><a href="#">Accessories</a> </li>
                            <li><a href="#">Sandals</a> </li>
                            <li><a href="#">Accessories</a> </li>
                            <li><a href="#">Apparel</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="text-info text-uppercase">Get the news</h5>
                                <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                <form action="#" method="post" id="newsletter">
                                    <div>
                                        <input type="text" name="email" id="newsletter-mail" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address" autocomplete="off">
                                        <button type="submit" title="Subscribe" class="btn btn-primary pull-right"><span>Subscribe</span></button>
                                    </div>
                                </form>
                                <hr>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="text-info text-uppercase">Stay in touch</h5>
                                <ul class="list-inline social clearfix">
                                    <li class="col-sm-4 facebook"><a href="#"> <span><i class="ion-social-facebook"></i></span>
                                            <p>2598</p>
                                        </a></li>
                                    <li class="col-sm-4 twitter"><a href="#"> <span><i class=" ion-social-twitter"></i></span>
                                            <p>4576</p>
                                        </a></li>
                                    <li class="col-sm-4 googleplus"><a href="#"> <span><i class=" ion-social-googleplus"></i></span>
                                            <p>1269</p>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-btm wow fadeIn" data-wow-offset="50" data-wow-duration="2s">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="pull-left">&copy; 2016.Home Decorz </p>
                        <p class="pull-right">Powered By <a class="external" href="http://www.webht.jn/">Team WebHT</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div></div>
<a href="#0" class="cd-top"></a> 


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
