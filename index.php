<?php include 'include/template_header.php'; ?>
<section class="banner">
   <div class="banner-content">
      <h3 class="banner-title">
         We Are Experts In Business Plan
      </h3>
      <p class="banner-subtitle">
         We always provide our best services for our clients
      </p>
      <p class="search-title">
         What are you looking for?
      </p>
      <form action="products.php">
         <div class="search-panel">
            <div class="search-panel-col">               
               <select name="plan" class="select2" data-placeholder="Business Plan">
                  <option value=""></option>
                  <option value="1">Business Plan 1</option>
                  <option value="2">Business Plan 2</option>
                  <option value="3">Business Plan 3</option>
               </select>
            </div>
            <div class="search-panel-col">
               <select name="product"  class="select2" data-placeholder="Select Product">
                  <option value=""></option>
                  <option value="1">Product 1</option>
                  <option value="2">Product 2</option>
                  <option value="3">Product 3</option>
               </select>
            </div>
            <div class="search-panel-col">
               <button type="submit" class="search-panel-btn">
               <i class="fa fa-search"></i>
               </button>
            </div>
         </div>
      </form>
   </div>
   <div class="bg-img">
      <img src="assets/images/banner.jpg" alt="">
   </div>
</section>
<section class="section section--best-services">
   <div class="container">
      <div class="section-title">
         <h3>WE ALWAYS PROVIDE BEST services</h3>
      </div>
      <div class="section-desc">
         <p>Companies lists research reveals best ecommerce marketing strategies that marketers must opt to boost their eCommerce sales. Read advanced tips with examples here.</p>
      </div>
      <div class="best-services">
         <div class="best-services-col">
            <div class="best-services-card">
               <div class="best-services-card-icon">
                  <div class="best-services-card-icon-wrap">
                     <img src="assets/images/best_services_001.png" alt="">
                  </div>
               </div>
               <div class="best-services-card-title">
                  Financial model
               </div>
            </div>
         </div>
         <div class="best-services-col">
            <div class="best-services-card">
               <div class="best-services-card-icon">
                  <div class="best-services-card-icon-wrap">
                     <img src="assets/images/best_services_002.png" alt="">
                  </div>
               </div>
               <div class="best-services-card-title">
                  Business Plan
               </div>
            </div>
         </div>
         <div class="best-services-col">
            <div class="best-services-card">
               <div class="best-services-card-icon">
                  <div class="best-services-card-icon-wrap">
                     <img src="assets/images/best_services_003.png" alt="">
                  </div>
               </div>
               <div class="best-services-card-title">
                  Pitch <br> Deck
               </div>
            </div>
         </div>
         <div class="best-services-col">
            <div class="best-services-card">
               <div class="best-services-card-icon">
                  <div class="best-services-card-icon-wrap">
                     <img src="assets/images/best_services_004.png" alt="">
                  </div>
               </div>
               <div class="best-services-card-title">
                  Interactive Dashboards
               </div>
            </div>
         </div>
         <div class="best-services-col">
            <div class="best-services-card">
               <div class="best-services-card-icon">
                  <div class="best-services-card-icon-wrap">
                     <img src="assets/images/best_services_005.png" alt="">
                  </div>
               </div>
               <div class="best-services-card-title">
                  Video Courses
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section section-inverse">
   <div class="products-section">
      <div class="container">
         <ul>
            <li><a href="#productTab1" class="active">FINANCIAL MODEL</a></li>
            <li><a href="#productTab2">PITCH DECK</a></li>
            <li><a href="#productTab3">BUSINESS PLAN</a></li>
            <li><a href="#productTab4">FEATURED PRODUCTS</a></li>
            <li><a href="#productTab5">FEATURED reseller</a></li>
         </ul>
      </div>
      <div class="producttab" id="productTab1">
         <div class="product-row product-slider product-slider-1 owl-carousel">
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
         <div class="product-slider-nav">
            <a href="#" onclick="prevProductSlider('.product-slider-1')"><img src="assets/images/arrow-product.png"></a>
            <a href="#" onclick="nextProductSlider('.product-slider-1')"><img src="assets/images/arrow-product.png"></a>         
         </div>
      </div>
      <div class="producttab" id="productTab2" style="display:none">
         <div class="product-row product-slider product-slider-2 owl-carousel">
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
         <div class="product-slider-nav">
            <a href="#" onclick="prevProductSlider('.product-slider-2')"><img src="assets/images/arrow-product.png"></a>
            <a href="#" onclick="nextProductSlider('.product-slider-2')"><img src="assets/images/arrow-product.png"></a>         
         </div>
      </div>
      <div class="producttab" id="productTab3" style="display:none">
         <div class="product-row product-slider product-slider-3 owl-carousel">
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
         <div class="product-slider-nav">
            <a href="#" onclick="prevProductSlider('.product-slider-3')"><img src="assets/images/arrow-product.png"></a>
            <a href="#" onclick="nextProductSlider('.product-slider-3')"><img src="assets/images/arrow-product.png"></a>         
         </div>
      </div>
      <div class="producttab" id="productTab4" style="display:none">
         <div class="product-row product-slider product-slider-4 owl-carousel">
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
         <div class="product-slider-nav">
            <a href="#" onclick="prevProductSlider('.product-slider-4')"><img src="assets/images/arrow-product.png"></a>
            <a href="#" onclick="nextProductSlider('.product-slider-4')"><img src="assets/images/arrow-product.png"></a>         
         </div>
      </div>
      <div class="producttab" id="productTab5" style="display:none">
         <div class="product-row product-slider product-slider-5 owl-carousel">
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
         <div class="product-slider-nav">
            <a href="#" onclick="prevProductSlider('.product-slider-5')"><img src="assets/images/arrow-product.png"></a>
            <a href="#" onclick="nextProductSlider('.product-slider-5')"><img src="assets/images/arrow-product.png"></a>         
         </div>
      </div>
   </div>
</section>
<section class="blog-section">
   <div class="blog-content">
      <div class="section-title section-title-inverse">
         <h3>OUR BLOG</h3>
      </div>
      <div class="blog-bg-layer"></div>
      <div class="blog-content-layer">
         <div class="container">
            <div class="row">
               <div class="col-12 col-sm-6 col-lg-3">
                  <div class="blog-card">
                     <div class="blog-img">
                        <img src="assets/images/blog_01.png" alt="">
                     </div>
                     <div class="blog-details">
                        <div class="blog-date">June 15, 2019</div>
                        <div class="blog-title">4 Ecommerce Marketing Strategies for Small Businesses</div>
                        <div class="blog-desc">companiesLists research reveals best ecommerce marketing strategies that marketers must...</div>
                        <div class="blog-action">
                           <a href="#" class="btn-icrest">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-lg-3">
                  <div class="blog-card">
                     <div class="blog-img">
                        <img src="assets/images/blog_01.png" alt="">
                     </div>
                     <div class="blog-details">
                        <div class="blog-date">June 15, 2019</div>
                        <div class="blog-title">4 Ecommerce Marketing Strategies for Small Businesses</div>
                        <div class="blog-desc">companiesLists research reveals best ecommerce marketing strategies that marketers must...</div>
                        <div class="blog-action">
                           <a href="#" class="btn-icrest">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-lg-3">
                  <div class="blog-card">
                     <div class="blog-img">
                        <img src="assets/images/blog_01.png" alt="">
                     </div>
                     <div class="blog-details">
                        <div class="blog-date">June 15, 2019</div>
                        <div class="blog-title">4 Ecommerce Marketing Strategies for Small Businesses</div>
                        <div class="blog-desc">companiesLists research reveals best ecommerce marketing strategies that marketers must...</div>
                        <div class="blog-action">
                           <a href="#" class="btn-icrest">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-sm-6 col-lg-3">
                  <div class="blog-card">
                     <div class="blog-img">
                        <img src="assets/images/blog_01.png" alt="">
                     </div>
                     <div class="blog-details">
                        <div class="blog-date">June 15, 2019</div>
                        <div class="blog-title">4 Ecommerce Marketing Strategies for Small Businesses</div>
                        <div class="blog-desc">companiesLists research reveals best ecommerce marketing strategies that marketers must...</div>
                        <div class="blog-action">
                           <a href="#" class="btn-icrest">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 text-center mt-1">
                  <a href="#" class="btn-icrest filled">Read All</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section section--best-services">
   <div>
      <div class="section-title">
         <h3>testimonial</h3>
      </div>
      <div class="testimonial-slider owl-carousel">
         <?php
         $x = 0;
         while($x <= 5) {
         echo '<div class="testimonial-slide">
                  <div class="testimonial-arrow">
                  <a href="#" onclick=prevProductSlider(".testimonial-slider")><img src="assets/images/arrow-product.png"></a>
                  <a href="#" onclick=nextProductSlider(".testimonial-slider")><img src="assets/images/arrow-product.png"></a>
                  </div>
                  <div class="testimonial-img">
                     <img src="assets/images/user_01.jpg" alt="">
                  </div>
                  <div class="testimonial-desc">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut tortor at purus sagittis elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut tortor at purus sagittis elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut tortor at purus sagittis elementum.
                  </div>
                  <div class="testimonial-name">
                     Alex H.
                  </div>
               </div>';
               $x++;
         }
         ?>
      </div>
   </div>
</section>

<?php include 'include/template_footer.php'; ?>
<?php
            if(isset($_GET['login'])) {               
               echo '<script>openModal("#loginModal")</script>';
            } 
?>