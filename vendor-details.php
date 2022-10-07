<?php include 'include/template_header.php'; ?>
<section class="section section-top-after-nav">
   <div class="container">
      <div class="row">
         <div class="col-12 col-lg-3">
             <div class="vendor-dp">
                  <img src="assets/images/user_01.jpg" alt="">
             </div>
         </div>
         <div class="col-12 col-lg-9">
            <div class="vendor-text">
               <div class="name">John doe, <span class="title">Financial Analyst </span>                </div>               
               
               <div class="desc">
                  <p><b>Email : </b><span>john@testsite.com</span></p>
                  <p><b>Phone : </b><span>+91 1234567890</span></p>
                  <p><b>Address : </b><span>1421/24, Solicon City, Indore 452001, Madhyapradesh, India</span></p>                  
                  <p><b>About John : </b><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus enim quam recusandae quasi ipsam suscipit quia voluptates aperiam minima ex voluptatum possimus, ratione ullam nam cum tempora pariatur, consectetur soluta.</span></p>
               </div>
               <div class="actions">
                  <a href="javascript:void(0)" class="btn-icrest"><i class="fa fa-user-plus"></i> Follow</a>
                  <a href="javascript:void(0)" class="btn-icrest"><i class="fa fa-envelope"></i> Contact</a>
               </div>
            </div>
         </div>        
      </div>
   </div>
</section>
<section>
<div class="container">      
<div class="section-title mb-5">
         <h3>John's Products</h3>
      </div> 
    <div class="product-list">
   
            <div class="product-row product-row-product-page">
            <?php
               $x = 1;
               while($x <= 4) {
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
<section class="section">
   <div>
      <div class="section-title mb-5">
         <h3>Other Vendors</h3>
      </div>
      <div class="container">
         <div class="row">
         <?php
               $x = 1;
               while($x <= 3) {
                  echo '  <div class="col-12 col-sm-6 col-md-4">
                  <div class="vendor-card">
                     <div class="vendor-card-inner">
                        <div class="vendor-card-front">
                        <div class="img"><img src="https://randomuser.me/api/portraits/men/'.$x.'.jpg" alt=""></div>
                           <div class="name">John Doe</div>
                           <div class="title">Financial Analysis</div>
                        </div>
                        <div class="vendor-card-back">
                           <div class="name">John Doe</div>
                           <div class="title">Financial Analysis</div>
                           <div class="actions">
                              <a href="vendor-details.php" class="btn-icrest"><i class="fa fa-user"></i> View Profile</a>
                              <a href="#" class="btn-icrest"><i class="fa fa-user-plus"></i>    Follow</a>
                           </div>
                           <div class="social">
                              <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                              <a href="#" class="in"><i class="fab fa-linkedin-in"></i></a>
                              <a href="#" class="ig"><i class="fab fa-instagram"></i></a>
                           </div>
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
<script>
   $(function(){
       $('.navbar').addClass('fixedScroll')
   })
</script>