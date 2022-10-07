<?php include 'include/template_header.php'; ?>
<section class="banner-sm">
   <img src="assets/images/banner-sm.jpg" alt="" class="banner-img">
   <div class="container">
      <div class="banner-title">
         Vendors
      </div>
   </div>
</section>
<section class="section">
   <div class="container">
      <div class="row">
      <?php
               $x = 1;
               while($x <= 6) {
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
</section>
<?php include 'include/template_footer.php'; ?>