<?php include 'include/template_header.php'; ?>
<section class="section section-top-after-nav">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-5" id="slider-section">
            <ul class="product-details-slider">
               <li>
                  <video controls>
                     <source src="assets/video/video.mp4" type="video/mp4">
                  </video>
               </li>
               <li><img src="assets/images/product_slide_001.jpg" alt="" data-large="assets/images/product_slide_001.jpg"></li>
               <li><img src="assets/images/product_slide_002.jpg" alt=""></li>
               <li><img src="assets/images/product_slide_003.jpg" alt=""></li>
               <li><img src="assets/images/product_slide_004.jpg" alt=""></li>
               <li><img src="assets/images/product_slide_005.jpg" alt=""></li>
            </ul>
            <ul class="product-details-thumb-slider">
               <li class="isVideo-thumb"><img src="assets/images/video_thumb.png" alt=""></li>
               <li><img src="assets/images/product_slide_001.jpg" alt=""></li>
               <li><img src="assets/images/product_slide_002.jpg" alt=""></li>
               <li><img src="assets/images/product_slide_003.jpg" alt=""></li>
               <li><img src="assets/images/product_slide_004.jpg" alt=""></li>
               <li><img src="assets/images/product_slide_005.jpg" alt=""></li>
            </ul>
         </div>
         <div class="col-12 col-lg-7">
            <div class="product-text">
               <div class="title">Business Idea About Financial Model for Immigration </div>
               <div class="author"><a href="vendor-details.php"><i class="fa fa-user"></i> icrest team</a>    <span class="icrest-rating" data-rating="2" data-total="5" data-width="90"></span> </div>
               <div class="desc">
                  <p><b>Revenue : </b><span>Revenue Buildup</span></p>
                  <p><b>Start Up Expenses : </b><span>$100,00.00</span></p>
                  <p><b>Cashflow : </b><span>Lorem Ipsum</span></p>
                  <p><b>Guidebook : </b><span><a href="#"><i class="fa fa-download"></i> Download</a> </span></p>
                  <p><b>Profit & Loss : </b><span>Lorem Ipsum</span></p>
               </div>
               <div class="actions">
                  <a href="javascript:void(0)" class="btn-icrest"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                  <a href="javascript:void(0)" class="btn-icrest"><i class="fa fa-heart"></i> Add to Wishlist</a>
               </div>
            </div>
         </div>
         <div class="col-12 b-block">
            <p><b>Summariazed Yearly Reports : </b><span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, similique explicabo reiciendis tempora doloremque, recusandae provident perferendis modi doloribus eaque velit libero ab officiis qui repellat quam sed facilis harum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsum atque magnam officiis cumque ipsam porro quis maxime deserunt, animi, reprehenderit officia nesciunt, praesentium labore nobis itaque. Omnis, nihil quam.</span></p>
            <p><b>Balance Sheet: </b><span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, similique explicabo reiciendis tempora doloremque, recusandae provident perferendis modi doloribus eaque velit libero ab officiis qui repellat quam sed facilis harum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsum atque magnam officiis cumque ipsam porro quis maxime deserunt, animi, reprehenderit officia nesciunt, praesentium labore nobis itaque. Omnis, nihil quam.</span></p>
            <p><b>Ratio Analysis: </b><span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, similique explicabo reiciendis tempora doloremque, recusandae provident perferendis modi doloribus eaque velit libero ab officiis qui repellat quam sed facilis harum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsum atque magnam officiis cumque ipsam porro quis maxime deserunt, animi, reprehenderit officia nesciunt, praesentium labore nobis itaque. Omnis, nihil quam.</span></p>
            <p>        <b>Product Description :</b>
               <span>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, similique explicabo reiciendis tempora doloremque, recusandae provident perferendis modi doloribus eaque velit libero ab officiis qui repellat quam sed facilis harum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsum atque magnam officiis cumque ipsam porro quis maxime deserunt, animi, reprehenderit officia nesciunt, praesentium labore nobis itaque. Omnis, nihil quam.</span>
            </p>
         </div>
      </div>
   </div>
</section>
<section class="section">
   <div>
      <div class="section-title mb-5">
         <h3>Related Products</h3>
      </div>
      <div class="container">
         <div class="product-list">
            <div class="product-row  product-row-product-page">
               <?php
                  $x = 1;
                  while($x <= 3) {
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
   </div>
</section>
<?php include 'include/template_footer.php'; ?>
<script>
   $(function(){
       $('.navbar').addClass('fixedScroll')
   })
</script>