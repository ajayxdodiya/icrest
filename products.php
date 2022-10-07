<?php include 'include/template_header.php'; ?>
<section class="banner-sm">
    <img src="assets/images/banner-sm.jpg" alt="" class="banner-img">
    <div class="container">
        <div class="banner-title">
          
          <?php
            if(!isset($_GET['plan'])) {
               echo 'Our Products';
            } else {    
               echo 'Search Results';  
            }
            ?>
        </div>
    </div>
</section>
<section>

<section class="section">
<div class="container">       
    <div class="product-list">
            <div class="product-row product-row-product-page">
            <?php
               $x = 1;
               while($x <= 5) {
                  echo '<div class="product-col">
                        <div class="product-card">
                           <label class="price-label">INR 150</label>
                           <div class="product-img">
                              <img src="assets/images/product_0'.$x.'.png" alt="">
                           </div>
                           <div class="product-content">
                            <a href="product-details.php">
                                <div class="title">Financial Model for Immigration</div>
                                <div class="author">Icrest team</div>
                            </a>
                              <div class="actions">
                                 <a href="#" class="btn-icrest"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                 <a href="#" class="btn-icrest"><i class="fa fa-heart"></i> Add to Wishlist</a>
                              </div>
                           </div>
                        </div>
                     </div>';
                  $x++;
               }          
               ?>
                 <?php
               $x = 1;
               while($x <= 5) {
                  echo '<div class="product-col">
                        <div class="product-card">
                           <label class="price-label">INR 150</label>
                           <div class="product-img">
                              <img src="assets/images/product_0'.$x.'.png" alt="">
                           </div>
                           <div class="product-content">
                            <a href="product-details.php">
                                <div class="title">Financial Model for Immigration</div>
                                <div class="author">Icrest team</div>
                            </a>
                              <div class="actions">
                                 <a href="#" class="btn-icrest"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                 <a href="#" class="btn-icrest"><i class="fa fa-heart"></i> Add to Wishlist</a>
                              </div>
                           </div>
                        </div>
                     </div>';
                  $x++;
               }          
               ?>
         </div>
        </div>
    </div>
</section>
<?php include 'include/template_footer.php'; ?>

