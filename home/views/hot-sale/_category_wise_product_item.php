<?php
;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 product-item-container effect-wrap effect-animate">
 <div class="product-main">
 <div class="product-view">
<figure class="double-img">
<a href="#">
<img  class="btm-img" src="media/<?php echo $model->imageFile;?>" width="263" height="240"  alt=""/><img class="top-img" src="media/<?php echo $model->imageFile;?>" width="263" height="240"  alt=""/>
</a>
</figure>

</div>
 <div class="product-btns effect-content-inner">
 <p class="effect-icon"> <a href="#" class="hint-top" data-hint="Add To Cart"><span class="cart ion-bag"></span></a></p>
 <p class="effect-icon"> <a data-toggle="modal" data-target="#quick-view-box" class="hint-top" data-hint="Quick View"><span class="ion-ios-eye view"></span> </a></p>
 </div>
 </div>
 <div class="product-info">
 <h3 class="product-name"><a href="product-details.html"><?php echo $model->name;?></a></h3>
 
 
 
 </div>
 </div>

