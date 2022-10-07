<?php                     
if(!isset($_COOKIE['loggedin'])) {
header("Location: index.php?login=true");  
}
?>    
<?php include 'include/template_header.php'; ?>
<section class="banner-sm">
    <img src="assets/images/banner-sm.jpg" alt="" class="banner-img">
    <div class="container">
        <div class="banner-title">
        My Orderes
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="user-card">
                    <div class="user-title">Order Summary</div>
                    <div class="order-table">
               <div class="order-row header-row">
                  <div class="order-col">
                     S.
                  </div>
                  <div class="order-col">
                     Order No.
                  </div>
                  <div class="order-col">
                     Product Description
                  </div>
                  <div class="order-col price-col">
                     Price
                  </div>
                  <div class="order-col price-col">
                     Ordered Date
                  </div>       
                  <div class="order-col price-col">
                     Status
                  </div>               
               </div>
               <div class="order-row">
                <div class="order-col">
                     1
                  </div>
                  <div class="order-col">
                    <span class="so-sm">Order ID : </span> #10256
                  </div>
                  <div class="order-col order-col-desc">
                     <img src="assets/images/product_01.png" alt="">               
                     <div class="desc">
                        <h3><a href="product-details.php">Financial Model for Immigration - 1</a></h3>
                        <p>Icrest team</p>
                     </div>
                  </div>
                  <div class="order-col price-col">
                     <p> <span class="so-sm">Price : </span> $1,000.00</p>
                  </div>    
                  <div class="order-col price-col">
                     <p> <span class="so-sm">Ordered on : </span>22-08-2019</p>
                  </div>        
                  <div class="order-col order-remove-item">
                     <span class="text-success">Completed</span>
                  </div>              
               </div>
               <div class="order-row">
                <div class="order-col">
                     1
                  </div>
                  <div class="order-col">
                    <span class="so-sm">Order ID : </span> #10256
                  </div>
                  <div class="order-col order-col-desc">
                     <img src="assets/images/product_01.png" alt="">               
                     <div class="desc">
                        <h3><a href="product-details.php">Financial Model for Immigration - 1</a></h3>
                        <p>Icrest team</p>
                     </div>
                  </div>
                  <div class="order-col price-col">
                     <p> <span class="so-sm">Price : </span> $1,000.00</p>
                  </div>    
                  <div class="order-col price-col">
                     <p> <span class="so-sm">Ordered on : </span>22-08-2019</p>
                  </div>        
                  <div class="order-col order-remove-item">
                     <span class="text-danger">Failed</span>
                  </div>              
               </div>
               <div class="order-row">
                <div class="order-col">
                     3
                  </div>
                  <div class="order-col">
                    <span class="so-sm">Order ID : </span> #10256
                  </div>
                  <div class="order-col order-col-desc">
                     <img src="assets/images/product_01.png" alt="">               
                     <div class="desc">
                        <h3><a href="product-details.php">Financial Model for Immigration - 1</a></h3>
                        <p>Icrest team</p>
                     </div>
                  </div>
                  <div class="order-col price-col">
                     <p> <span class="so-sm">Price : </span> $1,000.00</p>
                  </div>    
                  <div class="order-col price-col">
                     <p> <span class="so-sm">Ordered on : </span>22-08-2019</p>
                  </div>        
                  <div class="order-col order-remove-item">
                     <span class="text-warning">Process</span>
                  </div>              
               </div>
               
               
               
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'include/template_footer.php'; ?>

